<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        if ($this->session->userdata('role') != "siswa") {
            redirect("auth");
        }
    }

    function index()
    {
        $data = [
            'title' => 'Halaman Home Siswa'
        ];
        $this->load->view('layout/header');
        $this->load->view('siswa/home');
        $this->load->view('layout/footer');
    }

    function list_jadwal_saya()
    {
        $id_kelas = $this->session->userdata('id_kelas');
        $data = [
            'title' => 'Halaman Jadwal',
            'jadwal' => $this->Siswa_model->allJadwalSaya($id_kelas)->result()
        ];

        $this->load->view('layout/header');
        $this->load->view('siswa/jadwal_list', $data);
        $this->load->view('layout/footer');
    }
    function detail_jadwal($id_jadwal)
    {
        $id_kelas = $this->Siswa_model->detailJadwal($id_jadwal)->row_array();
        $id = $id_kelas['id_kelas'];
        $data = [

            'title' => 'Halaman Detail Jadwal',
            'jadwal' => $this->Siswa_model->detailJadwal($id_jadwal)->row_array(),
            'siswa' => $this->Siswa_model->siswaKelasJadwal($id)->result()
        ];
        // var_dump($data['siswa']);

        $this->load->view('layout/header');
        $this->load->view('siswa/detail_jadwal', $data);
        $this->load->view('layout/footer');
    }
}
