<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Petugas_model');
        if ($this->session->userdata('role') != "petugas") {
            redirect("auth");
        }
    }

    function index()
    {
        $data = [
            'title' => 'Halaman Home Petugas'
        ];
        $this->load->view('layout/header');
        $this->load->view('petugas/home');
        $this->load->view('layout/footer');
    }

    function list_jadwal_saya()
    {
        $id_petugas = $this->session->userdata('id_petugas');
        $data = [
            'title' => 'Halaman Jadwal',
            'jadwal' => $this->Petugas_model->allJadwalSaya($id_petugas)->result()
        ];
        var_dump($id_petugas);
        $this->load->view('layout/header');
        $this->load->view('petugas/jadwal_list', $data);
        $this->load->view('layout/footer');
    }

    function detail_jadwal($id_jadwal)
    {
        $id_kelas = $this->Petugas_model->detailJadwal($id_jadwal)->row_array();
        $id = $id_kelas['id_kelas'];
        $data = [

            'title' => 'Halaman Detail Jadwal',
            'jadwal' => $this->Petugas_model->detailJadwal($id_jadwal)->row_array(),
            'siswa' => $this->Petugas_model->siswaKelasJadwal($id)->result()
        ];
        // var_dump($data['siswa']);

        $this->load->view('layout/header');
        $this->load->view('petugas/detail_jadwal', $data);
        $this->load->view('layout/footer');
    }

    function profile()
    {
        $id_petugas = $this->session->userdata('id_petugas');
        $data = [
            'petugas' => $this->Petugas_model->getIdPetugas($id_petugas)->row_array(),
        ];
        // var_dump($data['cekortu']);
        $this->load->view('layout/header');
        $this->load->view('petugas/profile', $data);
        $this->load->view('layout/footer');
    }
}
