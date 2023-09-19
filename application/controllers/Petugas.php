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

    function do_update_guru()
    {
        $id = $this->session->userdata('id_petugas');
        $data = [
            'nip' => $this->input->post('nip'),
            'nama_petugas' => $this->input->post('nama_petugas'),
            'email_petugas' => $this->input->post('email_petugas'),
            'tempatlahir_petugas' => $this->input->post('tempatlahir_petugas'),
            'tgllahir_petugas' => $this->input->post('tgllahir_petugas'),
            'jk_petugas' => $this->input->post('jk_petugas'),
            'agama_petugas' => $this->input->post('agama_petugas'),
            'alamat_petugas' => $this->input->post('alamat_petugas'),
            'telp_petugas' => $this->input->post('telp_petugas'),
        ];

        $this->Petugas_model->updatePetugas($data, $id);
        $this->session->set_flashdata('success', 'petugas Berhasil ditambahkan');
        redirect('petugas/profile');
    }

    function change_password_petugas()
    {
        $id = $this->session->userdata('id_petugas');
        $data = [
            'password' => md5($this->input->post('password')),
        ];

        $this->Petugas_model->updatePasswordPetugas($data, $id);
        $this->session->set_flashdata('success', 'Siswa Berhasil ditambahkan');
        redirect('petugas/profile');
    }

    function nilai_list()
    {
        $id_petugas = $this->session->userdata('id_petugas');
        $jadwals = $this->Petugas_model->allJadwalSaya($id_petugas)->result();
        $id_kelas = 0;
        foreach ($jadwals as $jadwal) {
            $id_kelas = $jadwal->id_kelas;
            var_dump($id_kelas);
        }
        $data = [
            'title' => 'Halaman Jadwal',
            'jadwal' => $this->Petugas_model->allJadwalWithSiswaSaya($id_petugas)->result(),
            // 'siswa' => $this->Petugas_model->siswaKelasJadwal($id_kelas)->result()
        ];

        // var_dump($data['jadwal']);
        $this->load->view('layout/header');
        $this->load->view('petugas/nilai_list', $data);
        $this->load->view('layout/footer');
    }

    function do_add_nilai($id_siswa)
    {
        $datasiswa = $this->db->get_where('tb_siswa', ['id_siswa' => $id_siswa])
            ->row_array();
        $datajadwal = $this->db->get_where('tb_jadwal', ['id_kelas' => $datasiswa['id_kelas']])
            ->row_array();

        $data = [
            'title' => 'Tambah Nilai',
            'siswa' => $datasiswa,
            'jadwal' => $datajadwal
        ];
        $this->load->view('layout/header');
        $this->load->view('petugas/nilai_add', $data);
        $this->load->view('layout/footer');
    }
}
