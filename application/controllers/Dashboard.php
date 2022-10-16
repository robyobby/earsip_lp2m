<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model(['surat_keluar_m', 'unit_m', 'subunit_m', 'surat_masuk_m']);
    $this->load->library('form_validation');
  }


  public function index()
  {
    $data['row'] = $this->surat_keluar_m->get_sk_top5();
    $data['rows'] = $this->surat_masuk_m->get_sm_top5();
    $this->template->load('template', 'dashboard', $data);
  }
}
