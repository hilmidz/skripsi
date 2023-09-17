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
        $this->db->join('tb_kategori_kelas', 'tb_kategori_kelas.id = tb_kelas.id_kategori');
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
        return $this->db->get_where('tb_petugas', ['id' => $id])
            ->row_array();
    }

    function update_guru($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_petugas', $data);
    }

    public function deleteguru($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_petugas');
    }

    function allsiswa()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->join('tb_kelas', 'tb_kelas.id = tb_siswa.id_kelas');
        $this->db->join('tb_kategori_kelas', 'tb_kategori_kelas.id = tb_kelas.id_kategori');
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
        return $this->db->get_where('tb_siswa', ['id' => $id])
            ->row_array();
    }

    function update_siswa($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_siswa', $data);
    }

    public function deletesiswa($id)
    {
        $this->db->where('id', $id);
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
}
