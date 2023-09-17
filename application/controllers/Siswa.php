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
}
