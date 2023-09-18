<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Kepalaunit_model extends CI_Model
{
    function allguru()
    {
        $this->db->select('*');
        $this->db->from('tb_petugas');
        $query = $this->db->get();

        return $query;
    }


    function allKelas()
    {
        $this->db->select('*');
        $this->db->from('tb_kelas');
        $this->db->join('tb_kategori_kelas', 'tb_kategori_kelas.id_kategori = tb_kelas.id_kategori');
        $query = $this->db->get();

        return $query;
    }

    function allKategoriKelas()
    {
        $this->db->select('*');
        $this->db->from('tb_kategori_kelas');
        $query = $this->db->get();

        return $query;
    }

    function insertGuru($data)
    {
        $result = $this->db->insert('tb_petugas', $data);
        return $result;
    }

    function getIdGuru($id)
    {
        return $this->db->get_where('tb_petugas', ['id_petugas' => $id])
            ->row_array();
    }

    function update_guru($data, $id)
    {
        $this->db->where('id_petugas', $id);
        $this->db->update('tb_petugas', $data);
    }

    public function deleteguru($id)
    {
        $this->db->where('id_petugas', $id);
        $this->db->delete('tb_petugas');
    }

    function allsiswa()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_siswa.id_kelas');
        $this->db->join('tb_kategori_kelas', 'tb_kategori_kelas.id_kategori = tb_kelas.id_kategori');
        $query = $this->db->get();
        return $query;
    }

    function insertSiswa($data)
    {
        $result = $this->db->insert('tb_siswa', $data);
        return $result;
    }

    function getIdSiswa($id)
    {
        return $this->db->get_where('tb_siswa', ['id_siswa' => $id])
            ->row_array();
    }

    function update_siswa($data, $id)
    {
        $this->db->where('id_siswa', $id);
        $this->db->update('tb_siswa', $data);
    }

    public function deletesiswa($id)
    {
        $this->db->where('id_siswa', $id);
        $this->db->delete('tb_siswa');
    }

    function insertKelas($data)
    {
        $result = $this->db->insert('tb_kelas', $data);
        return $result;
    }

    function getIdKelas($id_kelas)
    {
        return $this->db->get_where('tb_kelas', ['id_kelas' => $id_kelas])
            ->row_array();
    }

    function update_kelas($data, $id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('tb_kelas', $data);
    }

    public function deletekelas($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->delete('tb_kelas');
    }

    function allJadwal()
    {
        $this->db->select('*');
        $this->db->from('tb_jadwal');
        $this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_jadwal.id_petugas');
        $this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_jadwal.id_kelas');
        $this->db->join('tb_kategori_kelas', 'tb_kategori_kelas.id_kategori = tb_kelas.id_kategori');
        $query = $this->db->get();
        return $query;
    }

    function insertJadwal($data)
    {
        $result = $this->db->insert('tb_jadwal', $data);
        return $result;
    }

    function update_jadwal($data, $id)
    {
        $this->db->where('id_jadwal', $id);
        $this->db->update('tb_jadwal', $data);
    }

    public function deletejadwal($id)
    {
        $this->db->where('id_jadwal', $id);
        $this->db->delete('tb_jadwal');
    }

    function getIdJadwal($id)
    {
        $this->db->select('*');
        $this->db->from('tb_jadwal');
        $this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_jadwal.id_petugas');
        $this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_jadwal.id_kelas');
        $this->db->join('tb_kategori_kelas', 'tb_kategori_kelas.id_kategori = tb_kelas.id_kategori');
        $this->db->where('tb_jadwal.id_jadwal', $id);
        $query = $this->db->get();
        return $query->row_array();
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

    function getIdAdmin($id_admin)
    {
        $this->db->select('*');
        $this->db->from('tb_admin');
        $this->db->where('id_admin', $id_admin);
        $query = $this->db->get();
        return $query;
    }

    function updateAdmin($data, $id)
    {
        $this->db->where('id_admin', $id);
        $result = $this->db->update('tb_admin', $data);
        return $result;
    }

    function updatePasswordAdmin($data, $id)
    {
        $this->db->where('id_admin', $id);
        $result = $this->db->update('tb_admin', $data);
        return $result;
    }
}
