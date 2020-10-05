<?php

class Data_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ekspedisi/m_user');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->library('form_validation');
    }

    function index()
    {
        $data["user"] = $this->m_user->getAll();
        $this->load->view("templates/unitkerja_header");
        $this->load->view("ekspedisi/v_user", $data); //
        $this->load->view("templates/unitkerja_footer");
    }
}
