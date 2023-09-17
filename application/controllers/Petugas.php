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
}
