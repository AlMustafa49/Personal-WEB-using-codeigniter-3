<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

    public function login($email, $password){
        $this->db->select('*');
        $this->db->from('tbl_biodata');
        $this->db->where(array(
            'email' => $email,
            'password' => $password,
        ));
        return $this->db->get()->row();
    }

}