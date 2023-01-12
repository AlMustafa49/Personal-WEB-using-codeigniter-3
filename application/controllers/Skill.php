<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Skill extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_skill');
    }
    

    public function index()
    {
        $data = array(
            'tittle' => 'Skill',
            'skill' => $this->m_skill->AllData(),
            'isi' => 'back-end/skill/v_index'
        );  
        $this->load->view('back-end/layout/v_template', $data, FALSE);
    }

    public function add() {

        $this->form_validation->set_rules('skill', 'Skill', 'required', array('required'=> '%s Wajib Diisi!!'));

        $this->form_validation->set_rules('nilai', 'Nilai', 'required', array('required'=> '%s Wajib Diisi!!'));

        
        if ($this->form_validation->run() == FALSE) {
            # code...
            $data = array(
                'tittle' => 'Add Data Skill',
                'isi' => 'back-end/skill/v_add'
            );  
            $this->load->view('back-end/layout/v_template', $data, FALSE);
        } else {
            $data = array(
                'skill' => $this->input->post('skill'),
                'nilai' => $this->input->post('nilai')
            );
            $this->m_skill->Add($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan!!');
            redirect('skill');
        }
        
        
    }

    public function edit($id) {
        $this->form_validation->set_rules('skill', 'Skill', 'required', array('required'=> '%s Wajib Diisi!!'));

        $this->form_validation->set_rules('nilai', 'Nilai', 'required', array('required'=> '%s Wajib Diisi!!'));

        if ($this->form_validation->run() == FALSE) {
            # code...
            $data = array(
                'tittle' => 'Edit Data Skill',
                'skill' => $this->m_skill->Detail($id),
                'isi' => 'back-end/skill/v_edit'
            );  
            $this->load->view('back-end/layout/v_template', $data, FALSE);
        } else {
            $data = array(
                'id' => $id,
                'skill' => $this->input->post('skill'),
                'nilai' => $this->input->post('nilai'),
            );
            $this->m_skill->Edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diupdate!!');
            redirect('skill');
        }
    }

    public function delete($id){
        $data = array(
            'id' => $id,
        );
        $this->m_skill->Delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Delete!!');
        redirect('skill');
    }

}
