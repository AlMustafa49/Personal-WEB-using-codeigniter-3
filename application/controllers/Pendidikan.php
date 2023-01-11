<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pendidikan');
    }
    

    public function index()
    {
        $data = array(
            'tittle' => 'Pendidikan',
            'pendidikan' => $this->m_pendidikan->AllData(),
            'isi' => 'back-end/pendidikan/v_index'
        );  
        $this->load->view('back-end/layout/v_template', $data, FALSE);
    }

    public function add() {

        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required', array('required'=> '%s Wajib Diisi!!'));

        $this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required'=> '%s Wajib Diisi!!'));

        
        if ($this->form_validation->run() == FALSE) {
            # code...
            $data = array(
                'tittle' => 'Add Data Pendidikan',
                'isi' => 'back-end/pendidikan/v_add'
            );  
            $this->load->view('back-end/layout/v_template', $data, FALSE);
        } else {
            $data = array(
                'pendidikan' => $this->input->post('pendidikan'),
                'jurusan' => $this->input->post('jurusan'),
                'tahun' => $this->input->post('tahun')
            );
            $this->m_pendidikan->Add($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan!!');
            redirect('pendidikan');
        }
        
        
    }

    public function edit($id) {
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required', array('required'=> '%s Wajib Diisi!!'));

        $this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required'=> '%s Wajib Diisi!!'));

        if ($this->form_validation->run() == FALSE) {
            # code...
            $data = array(
                'tittle' => 'Edit Data Pendidikan',
                'pendidikan' => $this->m_pendidikan->Detail($id),
                'isi' => 'back-end/pendidikan/v_edit'
            );  
            $this->load->view('back-end/layout/v_template', $data, FALSE);
        } else {
            $data = array(
                'id' => $id,
                'pendidikan' => $this->input->post('pendidikan'),
                'jurusan' => $this->input->post('jurusan'),
                'tahun' => $this->input->post('tahun')
            );
            $this->m_pendidikan->Edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diupdate!!');
            redirect('pendidikan');
        }
    }

    public function delete($id){
        $data = array(
            'id' => $id,
        );
        $this->m_pendidikan->Delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Delete!!');
        redirect('pendidikan');
    }

}
