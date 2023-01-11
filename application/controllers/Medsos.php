<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Medsos extends CI_Controller 
{
    public function index()
    {
        $data = array(
            'tittle' => 'Media Sosial',
            'isi' => 'back-end/medsos/v_indeks'
        );  
        $this->load->view('back-end/layout/v_template', $data, FALSE);
    }

}
