<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_medsos extends CI_Model {

    public function AllData(){
        $this->db->select('*');
        $this->db->from('tbl_medsos');
        return $this->db->get()->result();
    }

    public function Add($data){
        $this->db->insert('tbl_medsos', $data);
    }

    public function Detail($id){
        $this->db->select('*');
        $this->db->from('tbl_medsos');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function Edit($data) {

        $this->db->where('id', $data['id']);
        $this->db->update('tbl_medsos', $data);
        
    }

    public function Delete($data) {

        $this->db->where('id', $data['id']);
        $this->db->delete('tbl_medsos', $data);
        
    }


}

/* End of file M_medsos.php */
