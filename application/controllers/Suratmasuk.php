<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suratmasuk extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model(['surat_masuk_m', 'unit_m', 'subunit_m']);
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['row'] = $this->surat_masuk_m->get_sm();
    $this->template->load('template', 'surat_masuk/view_suratmasuk', $data);
  }

  public function tambah()
  {
    $tujuan = $this->unit_m->get_unit_detail()->result();
    $view_sm = $this->surat_masuk_m->get_sm()->result();
    $view_sm_aktif = $this->surat_masuk_m->get_sm_aktif()->result();
    $dari = $this->surat_masuk_m->get_dari()->result();
    $data = [
      'tujuan' => $tujuan,
      'dari' => $dari,
      'view_sm' => $view_sm,
      'view_sm_aktif' => $view_sm_aktif,
      'dari' => $dari
    ];
    $this->form_validation->set_rules('asal_suratmasuk', 'Asal Surat Masuk', 'required');
    $this->form_validation->set_rules('nomor_sm', 'Nomor Surat', 'required');
    $this->form_validation->set_rules('dari', 'Dari', 'required');
    $this->form_validation->set_rules('perihal_eks', 'Perihal', 'required');
    $this->form_validation->set_rules('singkatan', 'Tujuan', 'required');

    $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

    $this->form_validation->set_error_delimiters('<small><span class="text-danger">', '</small>');

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('template', 'surat_masuk/tambah_suratmasuk', $data);
    } else {
      $post = $this->input->post(null, TRUE);
      $config['upload_path']          = './uploads/file_surat_masuk';
      $config['allowed_types']        = 'pdf';
      $config['max_size']             = 2048;
      $config['file_name']            = substr(md5(rand()), 0, 7);
      $this->load->library('upload', $config);

      if (@$_FILES['nama_file_eks']['name'] != null) {
        if ($this->upload->do_upload('nama_file_eks')) {
          $post['nama_file_eks'] = $this->upload->data('file_name');
          $this->surat_masuk_m->tambah($post);
          if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan !');
          }
          redirect('Suratmasuk');
        } else {
          $this->upload->display_errors();
          $this->session->set_flashdata('warning', 'Hanya berekstensi PDF atau file terlalu besar');
        }
        redirect('Suratmasuk');
      } else {
        // Bila tidak ada file yang di upload maka simpan nama file jangan Null tapi kosong (" ")
        $post['nama_file_eks'] = null;
        $this->surat_masuk_m->tambah($post);
        if ($this->db->affected_rows() > 0) {
          $this->session->set_flashdata('success', 'Data Berhasil Disimpan !');
        }
        redirect('Suratmasuk');
      }
    }
  }

  public function batalkan()
  {
    $kode_sm = $this->input->post('kode_sm');
    if ($this->db->query("UPDATE tab_surat_masuk SET `status`= 0 WHERE kode_sm = $kode_sm")) {
      $this->session->set_flashdata('success', 'Data Berhasil Dibatalkan !');
    }
    redirect('Suratmasuk');
  }

  public function edit($id)
  {
    $tujuan = $this->unit_m->get_unit_detail()->result();
    $view_sm = $this->surat_masuk_m->get_sm()->result();
    $view_sm_aktif = $this->surat_masuk_m->get_sm_aktif()->result();
    $dari = $this->surat_masuk_m->get_dari()->result();
    $data = [
      'tujuan' => $tujuan,
      'dari' => $dari,
      'view_sm' => $view_sm,
      'view_sm_aktif' => $view_sm_aktif
    ];

    $post = $this->input->post(null, TRUE);
    $config['upload_path']          = './uploads/file_surat_masuk';
    $config['allowed_types']        = 'pdf';
    $config['max_size']             = 2048;
    $config['file_name']            = substr(md5(rand()), 0, 7);
    $this->load->library('upload', $config);

    $this->form_validation->set_rules('asal_suratmasuk', 'Asal Surat Masuk', 'required');
    $this->form_validation->set_rules('nomor_sm', 'Nomor Surat', 'required');
    $this->form_validation->set_rules('dari', 'Dari', 'required');
    $this->form_validation->set_rules('perihal_eks', 'Perihal', 'required');
    $this->form_validation->set_rules('singkatan', 'Tujuan', 'required');

    $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

    $this->form_validation->set_error_delimiters('<small><span class="text-danger">', '</small>');

    if ($this->form_validation->run() == FALSE) {
      $query = $this->surat_masuk_m->get_sm_aktif($id);
      if ($query->num_rows() > 0) {
        $data['row'] = $query->row();
        $this->template->load('template', 'surat_masuk/edit_suratmasuk', $data);
      } else {
        echo "<script>alert('Data tidak ditemukan');";
        echo "window.location='" . site_url('Suratmasuk') . "';</script>";
      }
    } else {
      if (@$_FILES['nama_file_eks']['name'] != null) {
        if ($this->upload->do_upload('nama_file_eks')) {
          $file = $this->surat_masuk_m->get_surat_masuk($post['kode_sm'])->row();
          if ($file->nama_file_eks != null) {
            $target_file = './uploads/file_surat_masuk/' . $file->nama_file_eks;
            unlink($target_file);
          }
          $post['nama_file_eks'] = $this->upload->data('file_name');

          $this->surat_masuk_m->edit($post);
          if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Diubah !');
          }
          redirect('Suratmasuk');
        } else {
          $this->upload->display_errors();
          $this->session->set_flashdata('warning', 'Hanya berekstensi PDF atau file terlalu besar');
        }
        redirect('Suratmasuk');
      } else {
        // Sudah benar
        $post['nama_file_eks'] = null;
        $this->surat_masuk_m->edit($post);
        if ($this->db->affected_rows() > 0) {
          $this->session->set_flashdata('success', 'Data Berhasil Diubah !');
        }
        redirect('Suratmasuk');
      }
    }
  }

  function viewPdf($nomor)
  {
    if (isset($_POST['view'])) {
      header("content-type: application/pdf");
      readfile('./uploads/file_surat_masuk/' . $nomor . '.pdf');
    }
  }
}
