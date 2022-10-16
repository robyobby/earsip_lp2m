<?php
defined('BASEPATH') or exit('No direct script access allowed');

class surat_keluar_m extends CI_Model
{

  public function get_sk_aktif($id = null)
  {
    $this->db->from('view_surat_keluar');
    if ($id != null) {
      $this->db->where('kode_sk', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function get_surat_keluar($id = null)
  {
    $this->db->from('tab_surat_keluar');
    if ($id != null) {
      $this->db->where('kode_sk', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function indeks_no()
  {
    $sql = "SELECT MAX(MID(no_indeks,7,4)) AS indeks_no
                FROM tab_surat_keluar";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
      $row = $query->row();
      $n = ((int)$row->indeks_no) + 1;
      $no = sprintf("%'.04d", $n);
    } else {
      $no = "0001";
    }
    $no_urut = date('ymd') . $no;
    return $no_urut;
  }

  public function indeks_no_new()
  {
    $sql = "SELECT MAX(no_indeks) AS indeks_no, MID(MAX(no_indeks),7,4) AS urut_no, MID(MAX(no_indeks),1,2) AS tahun FROM tab_surat_keluar";
    $query = $this->db->query($sql);
    if ($query->num_rows() > 0) {
      $row = $query->row();
      $tahun = $row->tahun;
      if ($tahun < date('y')) {
        $no = "0001";
      } elseif ($tahun == date('y')) {
        $n = ((int)$row->urut_no) + 1;
        $no = sprintf("%'.04d", $n);
      }
    }
    $no_urut = date('ymd') . $no;
    return $no_urut;
  }

  public function get_klasifikasi()
  {
    $query = $this->db->query("SELECT * FROM tab_klasifikasi");
    return $query;
  }

  public function get_tujuan()
  {
    $query = $this->db->query("SELECT DISTINCT CONCAT (jabatan,' ',nama_unit) AS nama_tujuan FROM view_unit
    UNION
    SELECT DISTINCT nama_tujuan AS nama_tujuan FROM tab_tujuan_eks
    UNION
    SELECT DISTINCT tab_surat_keluar.`nama_tujuan` AS nama_tujuan FROM tab_surat_keluar ORDER BY nama_tujuan ASC");
    return $query;
  }

  public function get_sk()
  {
    $query = $this->db->query("SELECT kode_sk,CONCAT(sifat_sk,'-',MID(no_indeks,7,4),'/Un.14/',`kode_surat_subunit`,'/',kode,'/',MID(no_indeks,3,2),'/20',MID(no_indeks,1,2)) AS no_surat,
    tanggal_sk, jenis_sk, nama_tujuan,perihal, nama_subunit, nama_unit, keterangan,nama_file,`status` FROM view_surat_keluar WHERE `status`=1 ORDER BY kode_sk DESC");
    return $query;
  }

  public function get_batal()
  {
    $query = $this->db->query("SELECT kode_sk,CONCAT(sifat_sk,'-',MID(no_indeks,7,4),'/Un.14/',`kode_surat_subunit`,'/',kode,'/',MID(no_indeks,3,2),'/20',MID(no_indeks,1,2)) AS no_surat,
    tanggal_sk, jenis_sk, nama_tujuan,perihal, nama_subunit, nama_unit, keterangan,nama_file,`status` FROM view_surat_keluar WHERE `status`=0 ORDER BY kode_sk DESC");
    return $query;
  }

  public function get_sk_top5()
  {
    $query = $this->db->query("SELECT kode_sk,CONCAT(sifat_sk,'-',MID(no_indeks,7,4),'/Un.14/',`kode_surat_subunit`,'/',kode,'/',MID(no_indeks,3,2),'/20',MID(no_indeks,1,2)) AS no_surat,
    tanggal_sk, jenis_sk, nama_tujuan,perihal, nama_subunit, nama_unit, keterangan,nama_file,`status` FROM view_surat_keluar WHERE `status`=1 ORDER BY kode_sk DESC LIMIT 0,5");
    return $query;
  }

  public function get_no_surat()
  {
    $sql = "SELECT kode_sk,CONCAT(sifat_sk,'-',MID(no_indeks,7,4),'/Un.14/',`kode_surat_subunit`,'/',kode,'/',MID(no_indeks,3,2),'/20',MID(no_indeks,1,2)) AS no_surat FROM view_surat_keluar ORDER BY kode_sk DESC";
    $query = $this->db->query($sql);
    $row = $query->row();
    $no_surat = $row->no_surat;
    return $no_surat;
  }

  public function tambah($post)
  {
    $params['tanggal_sk'] = $post['tanggal_sk'];
    $params['jenis_sk'] = $post['jenis_sk'];
    $params['sifat_sk'] = $post['sifat_sk'];
    $params['no_indeks'] = $post['no_indeks'];
    $params['kode_subunit'] = $post['kode_subunit'];
    $params['nama_tujuan'] = $post['nama_tujuan'];
    $params['kode_klasifikasi'] = $post['kode_klasifikasi'];
    $params['perihal'] = $post['perihal'];
    $params['keterangan'] = $post['keterangan'];
    $params['status'] = $post['status'];
    if ($post['nama_file'] != null) {
      $params['nama_file'] = $post['nama_file'];
    }
    $this->db->insert('tab_surat_keluar', $params);
  }

  public function edit($post)
  {
    $params['tanggal_sk'] = $post['tanggal_sk'];
    $params['jenis_sk'] = $post['jenis_sk'];
    $params['sifat_sk'] = $post['sifat_sk'];
    $params['no_indeks'] = $post['no_indeks'];
    $params['kode_subunit'] = $post['kode_subunit'];
    $params['nama_tujuan'] = $post['nama_tujuan'];
    $params['kode_klasifikasi'] = $post['kode_klasifikasi'];
    $params['perihal'] = $post['perihal'];
    $params['keterangan'] = $post['keterangan'];
    $params['status'] = $post['status'];
    if ($post['nama_file'] != null) {
      $params['nama_file'] = $post['nama_file'];
    }
    $this->db->where('kode_sk', $post['kode_sk']);
    $this->db->update('tab_surat_keluar', $params);
  }
}
