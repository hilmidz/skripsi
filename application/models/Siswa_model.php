<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Siswa_model extends CI_Model
{
    function allJadwalSaya($id_kelas)
    {
        $this->db->select('*');
        $this->db->from('tb_jadwal');
        $this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_jadwal.id_petugas');
        $this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_jadwal.id_kelas');
        $this->db->join('tb_kategori_kelas', 'tb_kategori_kelas.id_kategori = tb_kelas.id_kategori');
        $this->db->where('tb_kelas.id_kelas', $id_kelas);
        $query = $this->db->get();
        return $query;
    }
    function detailJadwal($id_jadwal)
    {
        $this->db->select('*');
        $this->db->from('tb_jadwal');
        $this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_jadwal.id_petugas');
        $this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_jadwal.id_kelas');
        $this->db->join('tb_kategori_kelas', 'tb_kategori_kelas.id_kategori = tb_kelas.id_kategori');
        $this->db->where('tb_jadwal.id_jadwal', $id_jadwal);
        $query = $this->db->get();
        return $query;
    }

    function siswaKelasJadwal($id)
    {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_siswa.id_kelas');
        $this->db->where('tb_kelas.id_kelas', $id);
        $query = $this->db->get();
        return $query;
    }

    function getIdSiswa($id_siswa)
    {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->where('id_siswa', $id_siswa);
        $query = $this->db->get();
        return $query;
    }

    function insertOrtuSiswa($data)
    {
        $result = $this->db->insert('tb_ortu', $data);
        return $result;
    }

    function updateOrtuSiswa($data, $id)
    {
        $this->db->where('id', $id);
        $result = $this->db->update('tb_ortu', $data);
        return $result;
    }

    function updateSiswa($data, $id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        $result = $this->db->update('tb_siswa', $data);
        return $result;
    }

    function cekOrtu($id_siswa)
    {
        $this->db->select('*');
        $this->db->from('tb_ortu');
        $this->db->join('tb_siswa', 'tb_siswa.id_siswa = tb_ortu.id_siswa');
        $this->db->where('tb_ortu.id_siswa', $id_siswa);
        $query = $this->db->get();
        return $query;
    }

    function updatePasswordSiswa($data, $id)
    {
        $this->db->where('id_siswa', $id);
        $result = $this->db->update('tb_siswa', $data);
        return $result;
    }
}
