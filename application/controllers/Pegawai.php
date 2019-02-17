<?php

class Pegawai extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pegawai_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['employees'] = $this->pegawai_model->getAll(); 
        $this->templates('master/pegawai/index', $data);
    }

    public function addpegawai()
    {
        $pegawai = $this->pegawai_model;
        $validation = $this->form_validation;
        $validation->set_rules($pegawai->rules());

        if($validation->run()){
            $pegawai->save();
            $this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
            redirect('pegawai', 'refresh');
        } else {
        $this->templates('master/pegawai/tambah');
        }
    }

    public function edit($id = null)
    {
        if(is_null($id)) show_404();

        $pegawai = $this->pegawai_model;
        $validation = $this->form_validation;
        $validation->set_rules($pegawai->rules());

        if($validation->run()){
            $pegawai->editData();
            $this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
            redirect('pegawai', 'refresh');
        } else {
            $data['pegawai'] = $pegawai->getById($id);
            if(!$data['pegawai']) show_404();

            $this->templates('master/pegawai/edit', $data);
        }
    }

    public function hapus($id)
    {
        if(is_null($id)) show_404();
        
        if($this->pegawai_model->deleteData($id)){
            $this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
            redirect('pegawai', 'refresh');
        }
    }
}