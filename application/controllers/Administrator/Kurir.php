<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kurir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("administrator/m_kurir");
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["kurir"] = $this->m_kurir->getAll();
        $this->load->view("templates/unitkerja_header");
        $this->load->view("administrator/v_kurir", $data);
        $this->load->view("templates/unitkerja_footer");
    }

    public function add()
    {
        $kurir = $this->m_kurir;
        $validation  = $this->form_validation;
        $validation->set_rules($kurir->rules());

        if ($validation->run()) {
            $kurir->save();
        }

        redirect("administrator/kurir");
        $this->session->set_flashdata('success', 'Berhasil');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('administrator/kurir');

        $kurir = $this->m_kurir;
        $validation = $this->form_validation;
        $validation->set_rules($kurir->rules());

        if ($validation->run()) {
            $kurir->update();
            $this->session->set_flashdata('success', 'Berhasil');
        }

        $data["kurir"] = $kurir->getById($id);
        if (!$data["kurir"]) show_404();

        redirect("administrator/kurir");
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->m_kurir->delete($id)) {
            redirect(site_url('administrator/kurir'));
        }
    }
}
