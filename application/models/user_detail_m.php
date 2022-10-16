<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_detail_m extends CI_Model
{

  public function get($id = null)
  {
    $this->db->select('*');
    $this->db->from('tab_user_detail', $id);
    if ($id != null) {
      $this->db->where('kode_user_detail', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function get_user_detail_list()
  {
    $this->db->select('*');
    $this->db->from('tab_user_detail');
    $query = $this->db->get();
    return $query;
  }

  public function hapus_detail($id)
  {
    $this->db->where('kode_user_detail', $id);
    $this->db->delete('tab_user_detail');
  }

  public function tambah_detail($post)
  {
    $params['kode_pegawai'] = $post['kode_pegawai'];
    $params['kode_user'] = $post['kode_user'];
    $this->db->insert('tab_user_detail', $params);
  }
}
