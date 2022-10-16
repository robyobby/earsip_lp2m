<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datauser extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['user_m', 'user_detail_m', 'pegawai_m']);
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->user_m->get_user_list();
		$this->template->load('template', 'user/Datauser', $data);
	}

	public function tambah()
	{
		$data = $this->user_m->get_user()->result();
		$this->form_validation->set_rules('nama_user', 'Nama User', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[tab_user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]', array('matches' => '%s tidak sesuai dengan password'));
		$this->form_validation->set_rules('status_level', 'Status Level', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti}');

		$this->form_validation->set_error_delimiters('<small><span class="text-danger">', '</small>');

		if ($this->form_validation->run() == FALSE) {
			$this->template->load('template', 'user/tambah_user', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$this->user_m->tambah($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Disimpan !');
			}
			redirect('Datauser');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('nama_user', 'Nama User', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]');
		if ($this->input->post('password')) {
			$this->form_validation->set_rules('password', 'Password', 'min_length[5]');
			$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]', array('matches' => '%s tidak sesuai dengan password'));
		}
		if ($this->input->post('passconf')) {
			$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]', array('matches' => '%s tidak sesuai dengan password'));
		}
		$this->form_validation->set_rules('status_level', 'Status Level', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');

		if ($this->form_validation->run() == FALSE) {

			$query = $this->user_m->get_user($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'user/edit_user', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				redirect('Datauser');
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->user_m->edit($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Diubah !');
			}
			redirect('Datauser');
		}
	}

	public function hapus()
	{
		$id = $this->input->post('kode_user');
		$this->user_m->hapus($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus !');
		}
		redirect('Datauser');
	}

	public function detail()
	{
		$idu1			    = $this->uri->segment(3);
		$pegawai      = $this->pegawai_m->get()->result();
		$view_user		= $this->db->query("SELECT kode_user_detail,kode_pegawai,kode_user,nama_pegawai, nip, nidn, nik FROM view_user where kode_user= '$idu1' ")->result();
		$data 					= [
			'pegawai' => $pegawai,
			'view_user' => $view_user,
		];

		if ($this->form_validation->run() == FALSE) {
			$query = $this->user_m->get($idu1);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
			}
		}
		if (isset($_POST['tambah_user_detail'])) {
			$post = $this->input->post(null, TRUE);
			$this->user_detail_m->tambah_detail($post);
			if ($this->db->affected_rows() > 0)
				$idu1 = $this->uri->segment(3);
			echo "<script>window.location='" . site_url('datauser/detail/' . $idu1) . "';</script>";
		}
		if (isset($_POST['hapus_user_detail'])) {
			$id = $this->input->post('kode_user_detail');
			$this->user_detail_m->hapus_detail($id);
			if ($this->db->affected_rows() > 0)
				$idu1	= $this->uri->segment(3);
			echo "<script>window.location='" . site_url('datauser/detail/' . $idu1) . "';</script>";
		}
		$this->template->load('template', 'user/tambah_user_detail', $data);
	}
}
