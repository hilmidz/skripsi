<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Petugas_model extends CI_Model
{
    function allJadwalSaya($id_petugas)
    {
        $this->db->select('*');
        $this->db->from('tb_jadwal');
        $this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_jadwal.id_petugas');
        $this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_jadwal.id_kelas');
        $this->db->join('tb_kategori_kelas', 'tb_kategori_kelas.id_kategori = tb_kelas.id_kategori');
        $this->db->where('tb_jadwal.id_petugas', $id_petugas);
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
}
