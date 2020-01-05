<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{
    public function getRoleDataById($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }
}
