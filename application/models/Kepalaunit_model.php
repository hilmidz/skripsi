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
        $this->db->join('tb_petugas', 'tb_petugas.id = tb_siswa.id_petugas');
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
}
