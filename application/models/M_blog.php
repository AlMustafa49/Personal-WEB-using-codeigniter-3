<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_blog extends CI_Model {

    public function AllData(){
        $this->db->select('*');
        $this->db->from('tbl_blog');
        return $this->db->get()->result();
    }

    public function Add($data){
        $this->db->insert('tbl_blog', $data);
    }

    public function Detail($id){
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function Edit($data) {

        $this->db->where('id', $data['id']);
        $this->db->update('tbl_blog', $data);
        
    }

    public function Delete($data) {

        $this->db->where('id', $data['id']);
        $this->db->delete('tbl_blog', $data);
        
    }

}

/* End of file M_blog.php */