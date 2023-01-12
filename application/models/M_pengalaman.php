<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengalaman extends CI_Model 
{

    public function AllData(){
        $this->db->select('*');
        $this->db->from('tbl_pengalaman');
        return $this->db->get()->result();
    }

    public function Add($data){
        $this->db->insert('tbl_pengalaman', $data);
    }

    public function Detail($id){
        $this->db->select('*');
        $this->db->from('tbl_pengalaman');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function Edit($data) {

        $this->db->where('id', $data['id']);
        $this->db->update('tbl_pengalaman', $data);
        
    }

    public function Delete($data) {

        $this->db->where('id', $data['id']);
        $this->db->delete('tbl_pengalaman', $data);
        
    }

}

/* End of file ModelName.php */
