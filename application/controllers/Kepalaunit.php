<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepalaunit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kepalaunit_model');
        if ($this->session->userdata('role') != "admin") {
            redirect("auth");
        }
    }

    function index()
    {
        $data = [
            'title' => 'Halaman Home Admin'
        ];
        $this->load->view('layout/header');
        $this->load->view('kepalaunit/home');
        $this->load->view('layout/footer');
    }

    function list_guru()
    {
        $data = [
            'title' => 'Halaman List Guru',
            'guru' => $this->Kepalaunit_model->allguru()->result()
        ];
        $this->load->view('layout/header');
        $this->load->view('kepalaunit/guru_list', $data);
        $this->load->view('layout/footer');
    }

    function add_guru()
    {
        $data = [
            'title' => 'Halaman Tambah Guru'
        ];
        $this->load->view('layout/header');
        $this->load->view('kepalaunit/guru_add', $data);
        $this->load->view('layout/footer');
    }

    function list_siswa()
    {
        $data = [
            'title' => 'Halaman Home Admin',
            'siswa' => $this->Kepalaunit_model->allsiswa()->result(),

        ];
        $this->load->view('layout/header');
        $this->load->view('kepalaunit/siswa_list', $data);
        $this->load->view('layout/footer');
    }

    function add_siswa()
    {
        $data = [
            'title' => 'Halaman Home Admin',
            'siswa' => $this->Kepalaunit_model->allsiswa()->result(),
            'kelas' => $this->Kepalaunit_model->allkelas()->result(),
        ];
        $this->load->view('layout/header');
        $this->load->view('kepalaunit/siswa_add', $data);
        $this->load->view('layout/footer');
    }

    function do_add_siswa()
    {
        if ($this->input->post('save')) {
            $data = [
                'username_siswa' => $this->input->post('username_siswa'),
                'nim_siswa' => $this->input->post('nim_siswa'),
                'nama_siswa' => $this->input->post('nama_siswa'),
                'password' => md5($this->input->post('nim_siswa')),
                'tempatlahir_siswa' => $this->input->post('tempatlahir_siswa'),
                'tgllahir_siswa' => $this->input->post('tgllahir_siswa'),
                'jk_siswa' => $this->input->post('jk_siswa'),
                'agama_siswa' => $this->input->post('agama_siswa'),
                'alamat_siswa' => $this->input->post('alamat_siswa'),
                'status_siswa' => $this->input->post('status_siswa'),
                'role' => 'siswa',
                'id_kelas' => $this->input->post('id_kelas'),
            ];
            $this->Kepalaunit_model->insertSiswa($data);
            $this->session->set_flashdata('success', 'Siswa Berhasil ditambahkan');
            redirect('kepalaunit/list_siswa');
        }
    }

    function edit_siswa($id)
    {
        $data = [

            'title' => 'Halaman Edit Siswa',
            'siswa' => $this->Kepalaunit_model->getIdSiswa($id)
        ];
        $this->load->view('layout/header');
        $this->load->view('kepalaunit/siswa_edit', $data);
        $this->load->view('layout/footer');
    }

    function update_siswa()
    {
        $data = [

            'username_siswa' => $this->input->post('username_siswa'),
            'nim_siswa' => $this->input->post('nim_siswa'),
            'nama_siswa' => $this->input->post('nama_siswa'),
            'tempatlahir_siswa' => $this->input->post('tempatlahir_siswa'),
            'tgllahir_siswa' => $this->input->post('tgllahir_siswa'),
            'jk_siswa' => $this->input->post('jk_siswa'),
            'agama_siswa' => $this->input->post('agama_siswa'),
            'alamat_siswa' => $this->input->post('alamat_siswa'),
            'status_siswa' => $this->input->post('status_siswa'),
            'role' => 'siswa'

        ];

        $id = $this->input->post('id');
        $result = $this->Kepalaunit_model->update_siswa($data, $id);
        if ($result = TRUE) {
            $this->session->set_flashdata('success', 'Siswa Berhasil diedit');
            redirect('kepalaunit/list_siswa');
        } else {
            $this->session->set_flashdata('error', 'Siswa Gagal diedit');
            redirect('kepalaunit/list_siswa');
        }
    }

    public function deletesiswa($id)
    {
        $this->Kepalaunit_model->deletesiswa($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Employee successfuly deleted !');
        } else {
            $this->session->set_flashdata('msg', 'Employee delete failed !');
        }
        redirect('kepalaunit/list_siswa');
    }

    function do_add_guru()
    {
        if ($this->input->post('save')) {
            $data = [
                'nip' => $this->input->post('nip'),
                'nama_petugas' => $this->input->post('nama_petugas'),
                'email_petugas' => $this->input->post('email_petugas'),
                'password' => md5($this->input->post('nip')),
                'tempatlahir_petugas' => $this->input->post('tempatlahir_petugas'),
                'tgllahir_petugas' => $this->input->post('tgllahir_petugas'),
                'jk_petugas' => $this->input->post('jk_petugas'),
                'agama_petugas' => $this->input->post('agama_petugas'),
                'alamat_petugas' => $this->input->post('alamat_petugas'),
                'telp_petugas' => $this->input->post('telp_petugas'),
                'status_petugas' => $this->input->post('status_petugas'),
                'role' => 'petugas'
            ];
            $this->Kepalaunit_model->insertGuru($data);
            $this->session->set_flashdata('success', 'Guru Berhasil ditambahkan');
            redirect('kepalaunit/list_guru');
        }
    }

    function edit_guru($id)
    {
        $data = [
            'title' => 'Halaman Edit Guru',
            'guru' => $this->Kepalaunit_model->getIdGuru($id),
        ];
        $this->load->view('layout/header');
        $this->load->view('kepalaunit/guru_edit', $data);
        $this->load->view('layout/footer');
    }

    function updateGuru()
    {
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
            'status_petugas' => $this->input->post('status_petugas'),
            'role' => 'petugas'
        ];

        $id = $this->input->post('id');
        $result = $this->Kepalaunit_model->update_guru($data, $id);
        if ($result = TRUE) {
            $this->session->set_flashdata('success', 'Guru Berhasil diedit');
            redirect('kepalaunit/list_guru');
        } else {
            $this->session->set_flashdata('error', 'Guru Gagal diedit');
            redirect('kepalaunit/list_guru');
        }
    }

    public function deleteguru($id)
    {
        $this->Kepalaunit_model->deleteguru($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Employee successfuly deleted !');
        } else {
            $this->session->set_flashdata('msg', 'Employee delete failed !');
        }
        redirect('kepalaunit/list_guru');
    }

    function list_kelas()
    {
        $data = [
            'title' => 'Halaman Kelas',
            'kelas' => $this->Kepalaunit_model->allKelas()->result(),
            'kategori_kelas' => $this->Kepalaunit_model->allKategoriKelas()->result()
        ];
        $this->load->view('layout/header');
        $this->load->view('kepalaunit/kelas_list', $data);
        $this->load->view('layout/footer');
    }

    function list_jadwal()
    {
        $data = [
            'title' => 'Halaman Jadwal',
            'jadwal' => $this->Kepalaunit_model->allJadwal()->result()
        ];

        $this->load->view('layout/header');
        $this->load->view('kepalaunit/jadwal_list', $data);
        $this->load->view('layout/footer');
    }
    function add_kelas()
    {
        $data = [
            'title' => 'Halaman Home Admin',
            'kelas' => $this->Kepalaunit_model->allkelas()->result(),
            'kategori' => $this->Kepalaunit_model->allKategoriKelas()->result(),
        ];
        $this->load->view('layout/header');
        $this->load->view('kepalaunit/kelas_add', $data);
        $this->load->view('layout/footer');
    }

    function do_add_kelas()
    {
        if ($this->input->post('save')) {
            $data = [
                'nama_kelas' => $this->input->post('nama_kelas'),
                'id_kategori' => $this->input->post('id_kategori')
            ];
            $this->Kepalaunit_model->insertKelas($data);
            $this->session->set_flashdata('success', 'Siswa Berhasil ditambahkan');
            redirect('kepalaunit/list_kelas');
        }
    }

    function edit_kelas($id_kelas)
    {
        $data = [

            'title' => 'Halaman Edit Siswa',
            'kelas' => $this->Kepalaunit_model->getIdKelas($id_kelas),
            'kategori' => $this->Kepalaunit_model->allKategoriKelas()->result()
        ];
        $this->load->view('layout/header');
        $this->load->view('kepalaunit/kelas_edit', $data);
        $this->load->view('layout/footer');
    }

    function updateKelas()
    {
        $data = [

            'nama_kelas' => $this->input->post('nama_kelas'),
            'id_kategori' => $this->input->post('id_kategori')
        ];

        $id_kelas = $this->input->post('id_kelas');
        $result = $this->Kepalaunit_model->update_kelas($data, $id_kelas);
        if ($result = TRUE) {
            $this->session->set_flashdata('success', 'Siswa Berhasil diedit');
            redirect('kepalaunit/list_kelas');
        } else {
            $this->session->set_flashdata('error', 'Siswa Gagal diedit');
            redirect('kepalaunit/list_kelas');
        }
    }

    public function deletekelas($id_kelas)
    {
        $this->Kepalaunit_model->deletekelas($id_kelas);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', 'Employee successfuly deleted !');
        } else {
            $this->session->set_flashdata('msg', 'Employee delete failed !');
        }
        redirect('kepalaunit/list_kelas');
    }

    function add_jadwal()
    {
        $data = [
            'title' => 'Halaman Add Jadwal',
            'petugas' => $this->Kepalaunit_model->allguru()->result(),
            'kelas' => $this->Kepalaunit_model->allKelas()->result(),
        ];
        $this->load->view('layout/header');
        $this->load->view('kepalaunit/jadwal_add', $data);
        $this->load->view('layout/footer');
    }

    function do_add_jadwal()
    {
        if ($this->input->post('save')) {
            $data = [
                'hari_jadwal' => $this->input->post('hari_jadwal'),
                'tema_pelajaran' => $this->input->post('tema_pelajaran'),
                'jam_mulai' => $this->input->post('jam_mulai'),
                'jam_selesai' => $this->input->post('jam_selesai'),
                'id_petugas' => $this->input->post('id_petugas'),
                'id_kelas' => $this->input->post('id_kelas'),
            ];
            $this->Kepalaunit_model->insertJadwal($data);
            $this->session->set_flashdata('success', 'Siswa Berhasil ditambahkan');
            redirect('kepalaunit/list_jadwal');
        }
    }

    function detail_jadwal($id_jadwal)
    {
        $id_kelas = $this->Kepalaunit_model->detailJadwal($id_jadwal)->row_array();
        $id = $id_kelas['id_kelas'];
        $data = [

            'title' => 'Halaman Detail Jadwal',
            'jadwal' => $this->Kepalaunit_model->detailJadwal($id_jadwal)->row_array(),
            'siswa' => $this->Kepalaunit_model->siswaKelasJadwal($id)->result()
        ];
        // var_dump($data['siswa']);

        $this->load->view('layout/header');
        $this->load->view('kepalaunit/detail_jadwal', $data);
        $this->load->view('layout/footer');
    }
}
