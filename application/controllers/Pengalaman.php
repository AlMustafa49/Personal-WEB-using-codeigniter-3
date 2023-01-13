<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengalaman extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengalaman');
    }
    

    public function index()
    {
        $data = array(
            'tittle' => 'Pengalaman',
            'pengalaman' => $this->m_pengalaman->AllData(),
            'isi' => 'back-end/pengalaman/v_index'
        );  
        $this->load->view('back-end/layout/v_template', $data, FALSE);
    }

    public function add() {

        $this->form_validation->set_rules('posisi', 'Posisi', 'required', array('required'=> '%s Wajib Diisi!!'));

        $this->form_validation->set_rules('instansi', 'Instansi', 'required', array('required'=> '%s Wajib Diisi!!'));

        $this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required'=> '%s Wajib Diisi!!'));

        if ($this->form_validation->run() == FALSE) {
            # code...
            $data = array(
                'tittle' => 'Add Data Pengalaman',
                'isi' => 'back-end/pengalaman/v_add'
            );  
            $this->load->view('back-end/layout/v_template', $data, FALSE);
        } else {
            $data = array(
                'posisi' => $this->input->post('posisi'),
                'instansi' => $this->input->post('instansi'),
                'tahun' => $this->input->post('tahun')
            );
            $this->m_pengalaman->Add($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan!!');
            redirect('pengalaman');
        }
        
        
    }

    public function edit($id) {
        $this->form_validation->set_rules('posisi', 'Posisi', 'required', array('required'=> '%s Wajib Diisi!!'));

        $this->form_validation->set_rules('instansi', 'Instansi', 'required', array('required'=> '%s Wajib Diisi!!'));

        $this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required'=> '%s Wajib Diisi!!'));

        if ($this->form_validation->run() == FALSE) {
            # code...
            $data = array(
                'tittle' => 'Edit Data Pengalaman',
                'pengalaman' => $this->m_pengalaman->Detail($id),
                'isi' => 'back-end/pengalaman/v_edit'
            );  
            $this->load->view('back-end/layout/v_template', $data, FALSE);
        } else {
            $data = array(
                'id' => $id,
                'posisi' => $this->input->post('posisi'),
                'instansi' => $this->input->post('instansi'),
                'tahun' => $this->input->post('tahun'),
            );
            $this->m_pengalaman->Edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diupdate!!');
            redirect('pengalaman');
        }
    }

    public function delete($id){
        $data = array(
            'id' => $id,
        );
        $this->m_pengalaman->Delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Delete!!');
        redirect('pengalaman');
    }

}