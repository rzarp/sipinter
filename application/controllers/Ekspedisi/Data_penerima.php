<?php

class Data_penerima extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ekspedisi/m_penerima');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->library('form_validation');
    }

    function index()
    {
        $data["penerima"] = $this->m_penerima->getAll();
        $this->load->view("templates/unitkerja_header");
        $this->load->view("ekspedisi/v_penerima", $data);
        $this->load->view("templates/unitkerja_footer");
    }

    public function add()
    {
        $penerima = $this->m_penerima;
        $validation  = $this->form_validation;
        $validation->set_rules($penerima->rules());

        if ($validation->run()) {
            $penerima->save();
        }

        redirect("ekspedisi/data_penerima");
        $this->session->set_flashdata('success', 'Berhasil');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('ekspedisi/data_penerima');

        $penerima = $this->m_penerima;
        $validation = $this->form_validation;
        $validation->set_rules($penerima->rules());

        if ($validation->run()) {
            $penerima->update();
            $this->session->set_flashdata('success', 'Berhasil');
        }

        $data["penerima"] = $penerima->getById($id);
        if (!$data["penerima"]) show_404();

        redirect("ekspedisi/data_penerima");
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->m_penerima->delete($id)) {
            redirect(site_url('ekspedisi/data_penerima'));
        }
    }
}
