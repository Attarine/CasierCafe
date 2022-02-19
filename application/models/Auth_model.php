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
}
