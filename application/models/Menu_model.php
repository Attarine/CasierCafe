<?php

class Menu_model extends CI_Model
{
    public function getCoreFood()
    {
        $this->db->select('core_food.food_id, core_food.food_name, core_food.food_price');
        $this->db->from('core_food');
        $this->db->where('core_food.data_store', 0);
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function insertCoreFood($data)
    {
        if ($this->db->insert('core_food', $data)) {
            return true;
        } else {
            return false;
        }
    }
}
