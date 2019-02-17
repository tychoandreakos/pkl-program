<?php

class Pelanggan extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pelanggan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['costumers'] = $this->pelanggan_model->getAll();
        $this->templates('master/pelanggan/index', $data);
    }

    public function addpelanggan()
    {
        $pelanggan = $this->pelanggan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pelanggan->rules());

        if($validation->run()){
            $pelanggan->save();
            $this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
            redirect('pelanggan', 'refresh');
        } else {
            $this->templates('master/pelanggan/tambah');
        }
    }

    public function edit($id = null)
    {
        if(is_null($id)) show_404();

        $pelanggan = $this->pelanggan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pelanggan->rules());

        if($validation->run()){
            $pelanggan->editData();
            $this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
            redirect('pelanggan', 'refresh');
        } else {
            $data['pelanggan'] = $pelanggan->getById($id);
            if(!$data['pelanggan']) show_404();
            $this->templates('master/pelanggan/edit', $data);
        }
    }

    public function hapus($id)
    {
        if(is_null($id)) show_404();

        if($this->pelanggan_model->deleteData($id)){
            $this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
            redirect('pelanggan', 'refresh');
        }
    }
}