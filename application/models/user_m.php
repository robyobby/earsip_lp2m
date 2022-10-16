<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_m extends CI_Model
{

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('tab_user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        // $this->db->where('password', $post['password']);
        $query = $this->db->get();
        return $query;
    }

    public function get_user($id = null)
    {
        $this->db->select('*');
        $this->db->from('tab_user', $id);
        if ($id != null) {
            $this->db->where('kode_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_user_detail($id = null)
    {
        $this->db->select('*');
        $this->db->from('tab_user_detail', $id);
        if ($id != null) {
            $this->db->where('kode_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tab_user', $id);
        if ($id != null) {
            $this->db->where('kode_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_user_list()
    {
        $this->db->select('*');
        $this->db->from('tab_user');
        $query = $this->db->get();
        return $query;
    }

    public function aktivasi($post)
    {
        $params['status_aktif'] = $post['status_aktif'];
        $this->db->where('kode_user', $post['kode_user']);
        $this->db->update('tab_user', $params);
    }


    public function tambah($post)
    {
        // $params['kode_unit'] = $post['kode_unit'];
        $params['nama_user'] = $post['nama_user'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['status_level'] = $post['status_level'];
        $params['status_aktif'] = $post['status_aktif'];
        $this->db->insert('tab_user', $params);
    }

    public function tambah_detail($post)
    {
        $params['kode_pegawai'] = $post['kode_pegawai'];
        $params['kode_user'] = $post['kode_user'];
        $this->db->insert('tab_user_detail', $params);
    }

    public function edit($post)
    {
        $params['nama_user'] = $post['nama_user'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['status_level'] = $post['status_level'];
        $params['status_aktif'] = $post['status_aktif'];
        $this->db->where('kode_user', $post['kode_user']);
        $this->db->update('tab_user', $params);
    }

    public function hapus($id)
    {
        $this->db->where('kode_user', $id);
        $this->db->delete('tab_user');
    }

    public function get_view_user()
    {
        $this->db->select('*');
        $this->db->from('view_user');
        $this->db->order_by('kode_pegawai', 'desc');
        $query = $this->db->get();
        return $query;
    }
}
