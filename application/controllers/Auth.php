<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function login()
	{
		$this->load->view('login');
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'kode_user' => $row->kode_user,
					'status_level' => $row->status_level,
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat, login berhasil');
					window.location='" . site_url('dashboard') . "';
				</script>";
			} else {
				echo "<script>
					alert('Maaf, login tidak berhasil');
					window.location='" . site_url('auth/login') . "';
				</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('id_user', 'level');
		$this->session->unset_userdata($params);
		redirect('');
	}
}
