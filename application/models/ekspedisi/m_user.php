<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    private $_table = "datauser";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}
