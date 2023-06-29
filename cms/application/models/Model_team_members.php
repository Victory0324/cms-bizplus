<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_team_members extends CI_Model 
{
    public function all_team_member()
    {
        $query = $this->db->query("SELECT * FROM tbl_team_member WHERE lang_id=? ORDER BY team_member_id ASC",[$_SESSION['sess_lang_id']]);
        return $query->result_array();
    }

    public function team_member_check($id) 
    {
        $this->db->select('*');
        $this->db->from('tbl_team_member');
        $this->db->where('team_member_id', $id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function team_member_detail($id) 
    {
        $this->db->select('*');
        $this->db->from('tbl_team_member');
        $this->db->where('team_member_id', $id);
        $query = $this->db->get();
        return $query->first_row('array');
    }
}