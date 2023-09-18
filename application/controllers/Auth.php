<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    function index()
    {
        $data = [
            'title' => 'Halaman Login',
        ];

        $this->load->view('auth/login');
    }

    function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $user = $this->Auth_model->login($username, $password);
        if ($user) {
            // Autentikasi berhasil
            // Set session atau tindakan sesuai kebutuhan

            // Redirect ke tampilan yang sesuai berdasarkan peran
            if ($user->role == 'siswa') {
                $session = array(
                    'id_siswa' => $user->id_siswa,
                    'username_siswa' => $user->username_siswa,
                    'nim_siswa' => $user->nim_siswa,
                    'nama_siswa' => $user->nama_siswa,
                    'tempatlahir_siswa' => $user->tempatlahir_siswa,
                    'jk_siswa' => $user->jk_siswa,
                    'agama_siswa' => $user->agama_siswa,
                    'alamat_siswa' => $user->alamat_siswa,
                    'status_siswa' => $user->status_siswa,
                    'role' => $user->role,
                    'id_kelas' => $user->id_kelas
                );
                $this->session->set_userdata($session);
                redirect('Siswa');
            } elseif ($user->role == 'petugas') {
                $session = array(
                    'id_petugas' => $user->id_petugas,
                    'nip' => $user->nip,
                    'nama_petugas' => $user->nama_petugas,
                    'email_petugas' => $user->email_petugas,
                    'tempatlahir_petugas' => $user->tempatlahir_petugas,
                    'tgllahir_petugas' => $user->tgllahir_petugas,
                    'jk_petugas' => $user->jk_petugas,
                    'agama_petugas' => $user->agama_petugas,
                    'alamat_petugas' => $user->alamat_petugas,
                    'telp_petugas' => $user->telp_petugas,
                    'status_petugas' => $user->status_petugas,
                    'role' => $user->role,
                );
                $this->session->set_userdata($session);
                redirect('Petugas');
            } elseif ($user->role == 'admin') {
                $session = array(
                    'id_admin' => $user->id_admin,
                    'nama_admin' => $user->nama_admin,
                    'username_admin	' => $user->username_admin,
                    'email_admin' => $user->email_admin,
                    'role' => $user->role,
                );
                $this->session->set_userdata($session);
                redirect('Kepalaunit');
            }
        } else {
            $this->session->set_flashdata('message', 'Login gagal');
        }

        redirect('Auth');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
