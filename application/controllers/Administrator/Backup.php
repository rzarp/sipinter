<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("administrator/m_unitkerja");
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["unitKerja"] = $this->m_unitkerja->getAll();
        $this->load->view("templates/unitkerja_header");
        $this->load->view("administrator/v_backup", $data);
        $this->load->view("templates/unitkerja_footer");
    }
}
