<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suratkeluar extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model(['surat_keluar_m', 'unit_m', 'subunit_m']);
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['row'] = $this->surat_keluar_m->get_sk();
    $this->template->load('template', 'surat_keluar/view_suratkeluar', $data);
  }

  public function batal()
  {
    $data['row'] = $this->surat_keluar_m->get_batal();
    $this->template->load('template', 'surat_keluar/view_batalsuratkeluar', $data);
  }

  public function tambah()
  {
    $subunit = $this->subunit_m->get_subunit_modal()->result();
    $view_sk = $this->surat_keluar_m->get_sk()->result();
    $view_sk_aktif = $this->surat_keluar_m->get_sk_aktif()->result();
    $tujuan = $this->surat_keluar_m->get_tujuan()->result();
    $klasifikasi = $this->surat_keluar_m->get_klasifikasi()->result();
    $data = [
      'subunit' => $subunit,
      'tujuan' => $tujuan,
      'klasifikasi' => $klasifikasi,
      'view_sk' => $view_sk,
      'view_sk_aktif' => $view_sk_aktif
    ];
    $this->form_validation->set_rules('jenis_sk', 'Jenis Surat Keluar', 'required');
    $this->form_validation->set_rules('sifat_sk', 'Sifat Surat Keluar', 'required');
    $this->form_validation->set_rules('nama_tujuan', 'Dari', 'required');
    $this->form_validation->set_rules('perihal', 'Perihal', 'required');
    $this->form_validation->set_rules('kode', 'Kode Klasifikasi', 'required');

    $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

    $this->form_validation->set_error_delimiters('<small><span class="text-danger">', '</small>');

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('template', 'surat_keluar/tambah_suratkeluar', $data);
    } else {
      $post = $this->input->post(null, TRUE);
      $config['upload_path']          = './uploads/file_surat_keluar';
      $config['allowed_types']        = 'pdf';
      $config['max_size']             = 2048;
      $config['file_name']             = substr(md5(rand()), 0, 7);
      $this->load->library('upload', $config);

      if (@$_FILES['nama_file']['name'] != null) {
        if ($this->upload->do_upload('nama_file')) {
          $post['no_indeks'] = $this->surat_keluar_m->indeks_no_new();
          $post['nama_file'] = $this->upload->data('file_name');
          $this->surat_keluar_m->tambah($post);

          if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan !');
          }
          redirect('Suratkeluar');
        } else {
          $this->upload->display_errors();
          $this->session->set_flashdata('warning', 'Hanya berekstensi PDF atau file terlalu besar');
        }
        redirect('Suratkeluar');
      } else {
        // Bila tidak ada file yang di upload maka simpan nama file jangan Null tapi kosong (" ")
        $post['nama_file'] = null;
        $post['no_indeks'] = $this->surat_keluar_m->indeks_no_new();
        $this->surat_keluar_m->tambah($post);
        if ($this->db->affected_rows() > 0) {
          // $this->session->set_flashdata('success', 'Data Berhasil Disimpan !');
          $this->session->set_flashdata('success-nosk', $post['no_surat'] = $this->surat_keluar_m->get_no_surat());
        }
        redirect('Suratkeluar');
      }
    }
  }

  public function batalkan()
  {
    $kode_sk = $this->input->post('kode_sk');
    if ($this->db->query("UPDATE tab_surat_keluar SET `status`= 0 WHERE kode_sk = $kode_sk")) {
      $this->session->set_flashdata('success', 'Data Berhasil Dibatalkan !');
    }
    redirect('Suratkeluar');
  }

  public function kembalikan()
  {
    $kode_sk = $this->input->post('kode_sk');
    if ($this->db->query("UPDATE tab_surat_keluar SET `status`= 1 WHERE kode_sk = $kode_sk")) {
      $this->session->set_flashdata('success', 'Data Berhasil Dibatalkan !');
    }
    redirect('Suratkeluar/batal');
  }

  public function edit($id)
  {
    $subunit       = $this->subunit_m->get_subunit_modal()->result();
    $view_sk       = $this->surat_keluar_m->get_sk_aktif()->result();
    $surat_keluar  = $this->surat_keluar_m->get_surat_keluar()->result();
    $no_indeks_new = $this->surat_keluar_m->indeks_no_new();
    $tujuan        = $this->surat_keluar_m->get_tujuan()->result();
    $klasifikasi   = $this->surat_keluar_m->get_klasifikasi()->result();
    $data          = [
      'subunit' => $subunit,
      'tujuan' => $tujuan,
      'klasifikasi' => $klasifikasi,
      'view_sk' => $view_sk,
      'no_indeks_new' => $no_indeks_new,
      'surat_keluar' => $surat_keluar
    ];

    $post = $this->input->post(null, TRUE);
    $config['upload_path']          = './uploads/file_surat_keluar';
    $config['allowed_types']        = 'pdf';
    $config['max_size']             = 2048;
    $config['file_name']            = substr(md5(rand()), 0, 7);
    $this->load->library('upload', $config);

    $this->form_validation->set_rules('jenis_sk', 'Jenis Surat Keluar', 'required');
    $this->form_validation->set_rules('sifat_sk', 'Sifat Surat Keluar', 'required');
    $this->form_validation->set_rules('nama_tujuan', 'Dari', 'required');
    $this->form_validation->set_rules('perihal', 'Perihal', 'required');
    $this->form_validation->set_rules('kode', 'Kode Klasifikasi', 'required');

    $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

    $this->form_validation->set_error_delimiters('<small><span class="text-danger">', '</small>');

    if ($this->form_validation->run() == FALSE) {
      $query = $this->surat_keluar_m->get_sk_aktif($id);
      if ($query->num_rows() > 0) {
        $data['row'] = $query->row();
        $this->template->load('template', 'surat_keluar/edit_suratkeluar', $data);
      } else {
        echo "<script>alert('Data tidak ditemukan');";
        echo "window.location='" . site_url('Suratkeluar') . "';</script>";
      }
    } else {
      if (@$_FILES['nama_file']['name'] != null) {
        if ($this->upload->do_upload('nama_file')) {
          $file = $this->surat_keluar_m->get_surat_keluar($post['kode_sk'])->row();
          if ($file->nama_file != null) {
            $target_file = './uploads/file_surat_keluar/' . $file->nama_file;
            unlink($target_file);
          }
          $post['nama_file'] = $this->upload->data('file_name');

          $this->surat_keluar_m->edit($post);
          if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Diubah !');
          }
          redirect('Suratkeluar');
        } else {
          $this->upload->display_errors();
          $this->session->set_flashdata('warning', 'Hanya berekstensi PDF atau file terlalu besar');
        }
        redirect('Suratkeluar');
      } else {
        // Sudah benar
        $post['nama_file'] = null;
        $this->surat_keluar_m->edit($post);
        if ($this->db->affected_rows() > 0) {
          $this->session->set_flashdata('success', 'Data Berhasil Diubah !');
        }
        redirect('Suratkeluar');
      }
    }
  }

  function viewPdf($nomor)
  {
    if (isset($_POST['view'])) {
      header("content-type: application/pdf");
      readfile('./uploads/file_surat_keluar/' . $nomor . '.pdf');
    }
  }
}
