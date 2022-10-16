<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataunit extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		// check_admin();
		$this->load->model(['unit_m']);
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->unit_m->get_unit_aktif();
		$this->template->load('template', 'unit/Dataunit', $data);
	}

	public function non_aktif()
	{
		$data['row'] = $this->unit_m->get_unit_non();
		$this->template->load('template', 'dataunit', $data);
	}

	// public function aktivasi($id)
	// {
	// 	$this->load->library('form_validation');
	// 	$this->form_validation->set_rules('nama_unit', 'Nama', 'required');
	// 	$this->form_validation->set_rules('singkatan', 'Nama', 'required');

	// 	$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

	// 	$this->form_validation->set_error_delimiters('<small><span class="help-block">', '</span></small>');

	// 	if ($this->form_validation->run() == FALSE) {
	// 		$query = $this->unit_m->get($id);
	// 		if ($query->num_rows() > 0) {
	// 			$data['row'] = $query->row();
	// 			$this->template->load('template', 'aktivasi', $data);
	// 		} else {
	// 			echo "<script>alert('Data tidak ditemukan');";
	// 			echo "window.location='" . site_url('dataunit') . "';</script>";
	// 		}
	// 	} else {
	// 		$post = $this->input->post(null, TRUE);
	// 		$this->unit_m->aktivasi($post);
	// 		if ($this->db->affected_rows() > 0) {
	// 			echo "<script>alert('Data berhasil disimpan');</script>";
	// 		}
	// 		echo "<script>window.location='" . site_url('unit/dataunit') . "';</script>";;
	// 	}
	// }

	public function hapus()
	{
		$id = $this->input->post('kode_unit');
		$this->unit_m->hapus($id);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus !');
		}
		redirect('Dataunit');
	}

	public function tambah()
	{
		$data = $this->unit_m->get_unit()->result();
		$this->form_validation->set_rules('nama_unit', 'Nama Unit', 'required');
		$this->form_validation->set_rules('singkatan', 'singkatan', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="text-danger">', '</small>');
		if ($this->form_validation->run() == FALSE) {
			$this->template->load('template', 'unit/tambah_unit', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$this->unit_m->tambah($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Ditambah !');
			}
			redirect('Dataunit');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('nama_unit', 'Nama Unit', 'required');
		$this->form_validation->set_rules('singkatan', 'singkatan', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		if ($this->form_validation->run() == FALSE) {
			$query = $this->unit_m->get_unit($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'unit/edit_unit', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='" . site_url('dataunit') . "';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->unit_m->edit($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Diubah !');
			}
			redirect('Dataunit');
		}
	}

	public function detail()
	{
		$idu2 = $this->uri->segment(3);
		$view_unit = $this->db->query("SELECT * FROM view_jabatan where kode_unit='$idu2'")->result();
		$view_unit_detail = $this->db->query("SELECT * FROM view_jabatan")->result();
		// $view_unit_detail = $this->db->query("SELECT * FROM view_jabatan")->result();
		$jabatan = $this->unit_m->get_jabatan()->result();
		$data = [
			'unit' => $view_unit,
			'unit_detail' => $view_unit_detail,
			'jabatan' => $jabatan,
		];
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="text-danger">', '</small>');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->unit_m->get_unit($idu2);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
			}
		}

		if (isset($_POST['tambah_unit_detail'])) {
			$post = $this->input->post(null, TRUE);
			$this->unit_m->tambah_detail($post);
			if ($this->db->affected_rows() > 0)
				$idu2 = $this->uri->segment(3);
			echo "<script>window.location='" . site_url('dataunit/detail/' . $idu2) . "';</script>";
		}
		if (isset($_POST['hapus_unit_detail'])) {
			$id = $this->input->post('kode_unit_detail');
			$this->unit_m->hapus_jabatan($id);
			if ($this->db->affected_rows() > 0)
				$idu2	= $this->uri->segment(3);
			echo "<script>window.location='" . site_url('dataunit/detail/' . $idu2) . "';</script>";
		}
		$this->template->load('template', 'unit/tambah_unit_detail', $data);
	}
}
