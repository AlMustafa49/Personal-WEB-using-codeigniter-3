<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function Detail() {
        $this->db->select('*');
        $this->db->from('tbl_biodata');
        $this->db->where('id', '1');
        return $this->db->get()->row();
    }

    public function UpdateSetting($data) {
        $this->db->where('id', '1');
        $this->db->update('tbl_biodata', $data);    
    }
    
}