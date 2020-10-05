<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    private $_table = "datauser";


    public $asalUK;
    public $role;
    public $username;
    public $npp;
    public $posisi;
    public $kodeBC;
    public $email;
    public $password;
    public $alamat;

    public function rules()
    {
        return [
            [
                'field' => 'asal',
                'label' => 'Asal',
                'rules' => 'required'
            ],

            [
                'field' => 'role',
                'label' => 'Role',
                'rules' => 'numeric'
            ],

            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],

            [
                'field' => 'npp',
                'label' => 'Npp',
                'rules' => 'numeric'
            ],

            [
                'field' => 'posisi',
                'label' => 'Posisi',
                'rules' => 'required'
            ],

            [
                'field' => 'kodebc',
                'label' => 'Kodebc',
                'rules' => 'required'
            ],

            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],

            [
                'field' => 'pass',
                'label' => 'Pass',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["npp" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->asalUK = $_POST['asal'];
        $this->role = $_POST['role'];
        $this->username = $post["nama"];
        $this->npp = $post["npp"];
        $this->posisi = $post["posisi"];
        $this->kodeBC = $_POST['kodebc'];
        $this->email = $post["email"];
        $this->password = $post["pass"];
        $this->alamat = $post["alamat"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->asal = $post["asal"];
        $this->nama = $post["nama"];
        $this->npp = $post["npp"];
        $this->posisi = $post["posisi"];
        $this->kode = $post["kode"];
        $this->email = $post["email"];
        $this->pass = $post["pass"];
        $this->alamat = $post["alamat"];
        return $this->db->update($this->_table, $this, array('npp' => $post['npp']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("idUser" => $id));
    }

    public function getKode($kode)
    {
        $this->db->where('kodeUK', $kode);
        $query = $this->db->get('kodebc');
        $output = '<option value="">Pilih Kode BC</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->kodeBc . '">' . $row->kodeBc . '</option>';
        }
        return $output;
    }
}
