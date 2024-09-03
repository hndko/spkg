<?php defined('BASEPATH') or exit('No direct script access allowed');

class Landing_m extends CI_Model
{

    function get_guru($nuptk)
    {
        $this->db->from('tbl_guru');
        $this->db->where('nuptk_guru', $nuptk);
        $query = $this->db->get();
        return $query;
    }
}
