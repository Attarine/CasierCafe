<?php

class Auth_model extends CI_Model
{
    public function insertRegistration($data)
    {
        $query = $this->db->insert('user', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getRoleID()
    {
        $this->db->select('user_role.role_id, user_role.role');
        $this->db->from('user_role');
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function getUser($username)
    {
        return  $this->db->get_where('user', ['username' => $username])->row_array();
    }
}
