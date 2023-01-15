<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Medsos extends CI_Controller 
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_medsos');
        $this->load->model('m_admin');

        //proteksi halaman
        $this->load->library('auth_login');
        $this->auth_login->proteksi_halaman();
    }
    
    public function index()
    {
        $data = array(
            'tittle' => 'Media Sosial',
            'medsos' => $this->m_medsos->AllData(),
            'isi' => 'back-end/medsos/v_index',
            'biodata' => $this->m_admin->Detail(),
        );  
        $this->load->view('back-end/layout/v_template', $data, FALSE);
    }

    public function add() {
        
        $this->form_validation->set_rules('medsos', 'Media Sosial', 'required', array('required'=> '%s Wajib Diisi!!'));

        $this->form_validation->set_rules('url', 'Url', 'required', array('required'=> '%s Wajib Diisi!!'));

        $this->form_validation->set_rules('icon', 'Icon', 'required', array('required'=> '%s Wajib Diisi!!'));
        
        
        if ($this->form_validation->run() == false) {
            # code...
            $data = array(
                'tittle' => 'Add Data Media Sosial',
                'isi' => 'back-end/medsos/v_add',
                'biodata' => $this->m_admin->Detail(),

            );  
            $this->load->view('back-end/layout/v_template', $data, false);
        } else {
            $data = array(
                'icon' => $this->input->post('icon'),
                'url' => $this->input->post('url'),
                'medsos' => $this->input->post('medsos')
            );
            $this->m_medsos->Add($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan!!');
            redirect('medsos');
        }
    
    }

    public function edit($id) {
        
        $this->form_validation->set_rules('medsos', 'Media Sosial', 'required', array('required'=> '%s Wajib Diisi!!'));

        $this->form_validation->set_rules('url', 'Url', 'required', array('required'=> '%s Wajib Diisi!!'));

        $this->form_validation->set_rules('icon', 'Icon', 'required', array('required'=> '%s Wajib Diisi!!'));

        
        if ($this->form_validation->run() == FALSE) {
            # code...
            $data = array(
                'tittle' => 'Edit Data Media Sosial',
                'medsos' => $this->m_medsos->Detail($id),
                'isi' => 'back-end/medsos/v_edit',
                'biodata' => $this->m_admin->Detail(),

            );  
            $this->load->view('back-end/layout/v_template', $data, FALSE);
        } else {
            $data = array(
                'id' => $id,
                'icon' => $this->input->post('icon'),
                'url' => $this->input->post('url'),
                'medsos' => $this->input->post('medsos')
            );
            $this->m_medsos->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diupdate!!');
            redirect('medsos');
        }
    
    }

    public function delete($id){
        $data = array(
            'id' => $id,
        );
        $this->m_medsos->Delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Delete!!');
        redirect('medsos');
    }

}