<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Kepalaunit_model');
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

    function profile()
    {
        $id_siswa = $this->session->userdata('id_siswa');
        $data = [
            'siswa' => $this->Siswa_model->getIdSiswa($id_siswa)->row_array(),
            'cekortu' => $this->Siswa_model->cekOrtu($id_siswa)->row_array()
        ];
        // var_dump($data['cekortu']);
        $this->load->view('layout/header');
        $this->load->view('siswa/profile', $data);
        $this->load->view('layout/footer');
    }

    function do_add_ortu()
    {
        $id_siswa = $this->session->userdata('id_siswa');
        $data = [
            'nama_ayah' => $this->input->post('nama_ayah'),
            'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
            'agama_ayah' => $this->input->post('agama_ayah'),
            'alamat_ayah' => $this->input->post('alamat_ayah'),
            'telp_ayah' => $this->input->post('telp_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
            'agama_ibu' => $this->input->post('agama_ibu'),
            'alamat_ibu' => $this->input->post('alamat_ibu'),
            'telp_ibu' => $this->input->post('telp_ibu'),
            'id_siswa' => $id_siswa,
        ];
        $this->Siswa_model->insertOrtuSiswa($data);
        $this->session->set_flashdata('success', 'Siswa Berhasil ditambahkan');
        redirect('siswa/profile');
    }
}
