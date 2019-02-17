<?php


class Barang extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['items'] = $this->barang_model->getAll();
        $this->templates('master/barang/index', $data);
    }

    public function addbarang()
    {
        $barang = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if($validation->run()){
            $barang->save();
            $this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
            redirect('barang', 'refresh');
        } else {
        $this->templates('master/barang/tambah');
        }
    }

    public function edit($id = null)
    {
        if(is_null($id)) show_404();

        $barang = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if($validation->run()){
            $barang->Editdata();
            $this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
            redirect('barang', refresh);
        } else {
            $data['barang'] = $barang->getById($id);
            if(!$data['barang']) show_404();
            $this->templates('master/barang/edit', $data);
        }
    }

    public function hapus($id = null)
    {
        if(is_null($id)) show_404();

        if($this->barang_model->deleteData($id)){
            $this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
            redirect('barang', 'refresh');
        }
    }


}