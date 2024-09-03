<?php defined('BASEPATH') or exit('No direct script access allowed');

class Users_m extends CI_Model
{

    public function get_user($id = null)
    {
        $this->db->from('tbl_user');
        if ($id != null) {
            $this->db->where('id_user', $id);
        } else {
            $this->db->order_by('level_user', 'ASC');
        }
        $query = $this->db->get();
        return $id ? $query->row() : $query;
    }

    public function create_user($data)
    {
        $this->db->insert('tbl_user', $data);
        return $this->db->insert_id(); // Return the ID of the newly inserted row
    }

    public function update_user($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('tbl_user', $data);
        return $this->db->affected_rows();
    }
}
