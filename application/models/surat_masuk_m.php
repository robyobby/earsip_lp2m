<?php
defined('BASEPATH') or exit('No direct script access allowed');

class surat_masuk_m extends CI_Model
{

  public function get_sm()
  {
    $query = $this->db->query("SELECT `kode_sm`, `tanggal_sm`, `tanggal_diterima`, `dari`, `perihal_eks`, `nama_file_eks`, `keterangan`, `asal_suratmasuk`, `nomor_sm`, `status`, `singkatan` AS tujuan  FROM `view_surat_masuk` WHERE `status` = 1 ORDER BY `kode_sm` DESC");
    return $query;
  }

  public function get_sm_top5()
  {
    $query = $this->db->query("SELECT `kode_sm`, `tanggal_sm`, `tanggal_diterima`, `dari`, `perihal_eks`, `nama_file_eks`, `keterangan`, `asal_suratmasuk`, `nomor_sm`, `status`, `singkatan` AS tujuan  FROM `view_surat_masuk` WHERE `status` = 1 ORDER BY `kode_sm` DESC LIMIT 0,5");
    return $query;
  }

  public function get_sm_aktif($id = null)
  {
    $this->db->from('view_surat_masuk');
    if ($id != null) {
      $this->db->where('kode_sm', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function get_surat_masuk($id = null)
  {
    $this->db->from('tab_surat_masuk');
    if ($id != null) {
      $this->db->where('kode_sm', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function get_dari()
  {
    $query = $this->db->query("SELECT DISTINCT CONCAT (jabatan,' ',singkatan) AS nama_dari FROM view_unit
    UNION
    SELECT DISTINCT nama_tujuan AS nama_dari FROM tab_tujuan_eks
    UNION
    SELECT DISTINCT dari AS nama_dari FROM tab_surat_masuk
    UNION
    SELECT DISTINCT tab_surat_keluar.`nama_tujuan` AS nama_dari FROM tab_surat_keluar ORDER BY nama_dari ASC");
    return $query;
  }


  public function tambah($post)
  {
    $params['tanggal_sm'] = $post['tanggal_sm'];
    $params['tanggal_diterima'] = $post['tanggal_diterima'];
    $params['dari'] = $post['dari'];
    $params['kode_unit_detail'] = $post['kode_unit_detail'];
    $params['asal_suratmasuk'] = $post['asal_suratmasuk'];
    $params['nomor_sm'] = $post['nomor_sm'];
    $params['perihal_eks'] = $post['perihal_eks'];
    $params['keterangan'] = $post['keterangan'];
    $params['status'] = $post['status'];
    if ($post['nama_file_eks'] != null) {
      $params['nama_file_eks'] = $post['nama_file_eks'];
    }
    $this->db->insert('tab_surat_masuk', $params);
  }

  public function edit($post)
  {
    $params['tanggal_sm'] = $post['tanggal_sm'];
    $params['tanggal_diterima'] = $post['tanggal_diterima'];
    $params['dari'] = $post['dari'];
    $params['kode_unit_detail'] = $post['kode_unit_detail'];
    $params['asal_suratmasuk'] = $post['asal_suratmasuk'];
    $params['nomor_sm'] = $post['nomor_sm'];
    $params['perihal_eks'] = $post['perihal_eks'];
    $params['keterangan'] = $post['keterangan'];
    $params['status'] = $post['status'];
    if ($post['nama_file_eks'] != null) {
      $params['nama_file_eks'] = $post['nama_file_eks'];
    }
    $this->db->where('kode_sm', $post['kode_sm']);
    $this->db->update('tab_surat_masuk', $params);
  }
}
