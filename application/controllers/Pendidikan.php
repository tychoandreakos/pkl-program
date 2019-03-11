<?php

class Pendidikan extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->load->model('pendidikan_model');
        $this->load->library('form_validation');
    }

    public function store($id)
    {
         if(empty($id)) show_404();

         $pendidikan = $this->pendidikan_model;
         $validation = $this->form_validation;
         $validation->set_rules($pendidikan->rules());
 
         if($pendidikan->cekDB($id)){
             $data['data'] = $pendidikan->getData($id);
             $this->templates('master/pegawai/datadiri/pendidikan/update', $data);
         } else {
 
         if($validation->run()){
             if($pendidikan->cekData($id)){
                 $pendidikan->save();
                 $this->session->set_flashdata('sukses', 'ditambah');
                 redirect('pegawai', 'refresh');
             } else {
             $this->session->set_flashdata('gagal', 'ditambah, id tidak ditemukan');
             redirect('pegawai', 'refresh');
             }
             
         } else {
             $data['id'] = $id;
             $data['nik'] = $this->pendidikan_model->getDataPegawai($id)->nik;
             $this->templates('master/pegawai/datadiri/pendidikan/index', $data);
         }
     }

    }

    public function update($id)
    {
        if(empty($id)) show_404();

        $pendidikan = $this->pendidikan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pendidikan->rules());
    
        if($validation->run()){
            if($pendidikan->update()){
                $this->session->set_flashdata('sukses', 'diupdate');
            redirect('pegawai', 'refresh');
            } else {
                $this->session->set_flashdata('gagal', 'diupdate');
                redirect('pegawai', 'refresh');    
            }
            
        }
    }

}