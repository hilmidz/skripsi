<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Auth_model extends CI_Model
{
    function login($username, $password)
    {
        $query = $this->db->get_where('tb_siswa', array('username_siswa' => $username, 'password' => $password));

        if ($query->num_rows() == 1) {
            return $query->row();
        }

        // Jika tidak ditemukan siswa, coba mencari guru
        $query = $this->db->get_where('tb_petugas', array('email_petugas' => $username, 'password' => $password));

        if ($query->num_rows() == 1) {
            return $query->row();
        }

        $query = $this->db->get_where('tb_admin', array('username_admin' => $username, 'password' => $password));

        if ($query->num_rows() == 1) {
            return $query->row();
        }

        return false;
    }
}
