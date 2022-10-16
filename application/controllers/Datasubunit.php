<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datasubunit extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['subunit_m', 'unit_m']);
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->subunit_m->get_unit_subunit();
		$this->template->load('template', 'subunit/viewsubunit', $data);
	}

	public function tambah()
	{
		$subunit = $this->subunit_m->get_subunit()->result();
		$unit = $this->unit_m->get_unit_modal()->result();
		$data = [
			'unit' => $unit,
			'subunit' => $subunit,
		];
		$this->form_validation->set_rules('kode_surat_subunit', 'Kode Surat Sub Unit', 'required');
		$this->form_validation->set_rules('nama_subunit', 'Nama Sub Unit', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<small><span class="text-danger">', '</small>');

		if ($this->form_validation->run() == FALSE) {
			$this->template->load('template', 'subunit/tambah_subunit', $data);
		} else {
			$post = $this->input->post(null, TRUE);
			$this->subunit_m->tambah_subunit($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Disimpan !');
			}
			redirect('Datasubunit');
		}
	}

	public function edit($id)
	{
		$unit = $this->unit_m->get_unit_modal()->result();
		$data = [
			'unit' => $unit
		];
		$this->form_validation->set_rules('nama_subunit', 'Nama Sub Unit', 'required');
		$this->form_validation->set_rules('kode_surat_subunit', 'singkatan', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_error_delimiters('<small><span class="text-danger">', '</small>');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->subunit_m->get_subunit($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'subunit/edit_subunit', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='" . site_url('Datasubunit') . "';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->subunit_m->edit($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Diubah !');
			}
			redirect('Datasubunit');
		}
	}

	public function hapus()
	{
		$id = $this->input->post('kode_subunit');
		$this->subunit_m->hapus($id);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus !');
		}
		redirect('Datasubunit');
	}
}
