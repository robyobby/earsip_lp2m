<?php
defined('BASEPATH') or exit('No direct script access allowed');

class subunit_m extends CI_Model
{

  public function get($id = null)
  {
    $this->db->from('view_subunit');
    if ($id != null) {
      $this->db->where('kode_subunit', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function get_subunit($id = null)
  {
    $this->db->from('view_subunit');
    $this->db->where('kode_subunit', $id);
    if ($id != null) {
      $this->db->where('kode_subunit', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function get_subunit_modal($id = null)
  {
    $this->db->from('view_subunit');
    if ($id != null) {
      $this->db->where('kode_subunit', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function get_unit_subunit()
  {
    $this->db->select('*');
    $this->db->from('view_subunit');
    $query = $this->db->get();
    return $query;
  }

  public function tambah_subunit($post)
  {
    $params['nama_subunit'] = $post['nama_subunit'];
    $params['kode_unit'] = $post['kode_unit'];
    $params['kode_surat_subunit'] = $post['kode_surat_subunit'];
    $this->db->insert('tab_subunit', $params);
  }

  public function edit($post)
  {
    $params['nama_subunit'] = $post['nama_subunit'];
    $params['kode_unit'] = $post['kode_unit'];
    $params['kode_surat_subunit'] = $post['kode_surat_subunit'];
    $this->db->where('kode_subunit', $post['kode_subunit']);
    $this->db->update('tab_subunit', $params);
  }

  public function hapus($id)
  {
    $this->db->where('kode_subunit', $id);
    $this->db->delete('tab_subunit');
  }
}
