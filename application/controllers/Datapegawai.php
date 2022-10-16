<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapegawai extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model(['pegawai_m']);
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['row'] = $this->pegawai_m->get_pegawai_list();
    $this->template->load('template', 'pegawai/Datapegawai', $data);
  }


  public function tambah()
  {
    $data = $this->pegawai_m->get_pegawai()->result();
    $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required');
    $this->form_validation->set_rules('nik', 'NIK', 'required|min_length[16]');
    $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
    $this->form_validation->set_rules('nidn', 'NIDN', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tab_pegawai.email]');
    $this->form_validation->set_rules('no_hp', 'No HP', 'required|numeric');

    $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
    $this->form_validation->set_message('min_length', '{field} minimal 16 karakter');
    $this->form_validation->set_message('valid_email', 'email ini {field} tidak valid');
    $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti}');
    $this->form_validation->set_message('numeric', '%s harus angka');

    $this->form_validation->set_error_delimiters('<small><span class="text-danger">', '</small>');

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('template', 'pegawai/tambah_pegawai', $data);
    } else {
      $post = $this->input->post(null, TRUE);
      $this->pegawai_m->tambah($post);
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Data Berhasil Ditambah !');
      }
      redirect('Datapegawai');
    }
  }

  public function edit($id)
  {
    $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required');
    $this->form_validation->set_rules('nip', 'nip', 'required');
    $this->form_validation->set_rules('nik', 'nik', 'required|min_length[16]');
    $this->form_validation->set_rules('nidn', 'nidn', 'required');
    $this->form_validation->set_rules('email', 'email', 'required|valid_email');
    $this->form_validation->set_rules('no_hp', 'no_hp', 'required|numeric');

    $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
    $this->form_validation->set_message('min_length', '{field} minimal 16 karakter');
    $this->form_validation->set_message('valid_email', 'email ini {field} tidak valid');
    $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti}');
    $this->form_validation->set_message('numeric', '%s harus angka');

    if ($this->form_validation->run() == FALSE) {
      $query = $this->pegawai_m->get_pegawai($id);
      if ($query->num_rows() > 0) {
        $data['row'] = $query->row();
        $this->template->load('template', 'pegawai/edit_pegawai', $data);
      } else {
        echo "<script>alert('Data tidak ditemukan');";
        echo "window.location='" . site_url('datapegawai') . "';</script>";
      }
    } else {
      $post = $this->input->post(null, TRUE);
      $this->pegawai_m->edit($post);
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Data Berhasil Diubah !');
      }
      redirect('Datapegawai');
    }
  }

  public function hapus()
  {
    $id = $this->input->post('kode_pegawai');
    $this->pegawai_m->hapus($id);

    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('success', 'Data Berhasil Dihapus !');
    }
    redirect('Datapegawai');
  }
}
