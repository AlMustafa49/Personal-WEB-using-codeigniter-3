<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendidikan extends CI_Model 
{

    public function AllData(){
        $this->db->select('*');
        $this->db->from('tbl_pendidikan');
        return $this->db->get()->result();
    }

    public function Add($data){
        $this->db->insert('tbl_pendidikan', $data);
    }

}

/* End of file ModelName.php */
