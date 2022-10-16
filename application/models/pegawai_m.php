<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pegawai_m extends CI_Model
{

    public function get_pegawai($id = null)
    {
        $this->db->from('tab_pegawai');
        $this->db->where('kode_pegawai', $id);
        if ($id != null) {
            $this->db->where('kode_pegawai', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_pegawai_list()
    {
        $this->db->select('*');
        $this->db->from('tab_pegawai');
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('tab_pegawai');
        if ($id != null) {
            $this->db->where('kode_pegawai', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_detail($id = null)
    {
        $this->db->from('tab_user_detail');
        if ($id != null) {
            $this->db->where('kode_pegawai', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tambah($post)
    {
        $params['nama_pegawai'] = $post['nama_pegawai'];
        $params['nik'] = $post['nik'];
        $params['nip'] = $post['nip'];
        $params['nidn'] = $post['nidn'];
        $params['email'] = $post['email'];
        $params['no_hp'] = $post['no_hp'];
        $this->db->insert('tab_pegawai', $params);
    }

    public function edit($post)
    {
        $params['nama_pegawai'] = $post['nama_pegawai'];
        $params['nik'] = $post['nik'];
        $params['nip'] = $post['nip'];
        $params['nidn'] = $post['nidn'];
        $params['email'] = $post['email'];
        $params['no_hp'] = $post['no_hp'];
        $this->db->where('kode_pegawai', $post['kode_pegawai']);
        $this->db->update('tab_pegawai', $params);
    }

    public function hapus($id)
    {
        $this->db->where('kode_pegawai', $id);
        $this->db->delete('tab_pegawai');
    }

    public function hapus_detail($id)
    {
        $this->db->where('kode_user', $id);
        $this->db->delete('tab_user_detail');
    }
}
