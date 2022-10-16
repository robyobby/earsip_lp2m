<?php
defined('BASEPATH') or exit('No direct script access allowed');

class unit_m extends CI_Model
{

  public function get_unit($id = null)
  {
    $this->db->from('tab_unit');
    $this->db->where('kode_unit', $id);
    if ($id != null) {
      $this->db->where('kode_unit', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function get_subunit($id = null)
  {
    $this->db->from('tab_subunit');
    $this->db->where('kode_subunit', $id);
    if ($id != null) {
      $this->db->where('kode_subunit', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function get_unit_aktif()
  {
    $this->db->select('*');
    $this->db->from('tab_unit');
    $this->db->where('status', 1);
    $this->db->order_by('nama_unit', 'asc');
    $query = $this->db->get();
    return $query;
  }

  public function get_unit_modal($id = null)
  {
    $this->db->from('tab_unit');
    if ($id != null) {
      $this->db->where('kode_unit', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function get_unit_detail()
  {
    $query = $this->db->query("SELECT DISTINCT CONCAT (jabatan,' ',singkatan) AS singkatan, nama_unit, kode_unit_detail FROM view_unit ORDER BY nama_unit");
    return $query;
  }

  public function get_jabatan($id = null)
  {
    $this->db->from('tab_unit_detail');
    if ($id != null) {
      $this->db->where('kode_unit_detail', $id);
    }
    $query = $this->db->get();
    return $query;
  }


  public function tambah($post)
  {
    // $params['kode_unit'] = $post['kode_unit'];
    $params['nama_unit'] = $post['nama_unit'];
    $params['singkatan'] = $post['singkatan'];
    $params['status'] = $post['status'];
    $this->db->insert('tab_unit', $params);
  }

  public function tambah_detail($post)
  {
    $params['kode_unit'] = $post['kode_unit'];
    $params['jabatan'] = $post['jabatan'];
    $this->db->insert('tab_unit_detail', $params);
  }

  public function edit($post)
  {
    $params['nama_unit'] = $post['nama_unit'];
    $params['singkatan'] = $post['singkatan'];
    $this->db->where('kode_unit', $post['kode_unit']);
    $this->db->update('tab_unit', $params);
  }

  public function hapus($id)
  {
    $this->db->where('kode_unit', $id);
    $this->db->delete('tab_unit');
  }

  public function hapus_jabatan($id)
  {
    $this->db->where('kode_unit_detail', $id);
    $this->db->delete('tab_unit_detail');
  }
}
