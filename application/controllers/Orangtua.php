<?php

class Orangtua extends Admin_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->load->model('ortu_model');
        $this->load->library('form_validation');
    }

    public function store($id)
    {
         if(empty($id)) show_404();

         $ortu = $this->ortu_model;
         $validation = $this->form_validation;
         $validation->set_rules($ortu->rules());
 
         if($ortu->cekDB($id)){
             $data['data'] = $ortu->getData($id);
             $this->templates('master/pegawai/datadiri/orangtua/update', $data);
         } else {
 
         if($validation->run()){
             if($ortu->cekData($id)){
                 $ortu->save();
                 $this->session->set_flashdata('sukses', 'ditambah');
                 redirect('pegawai', 'refresh');
             } else {
             $this->session->set_flashdata('gagal', 'ditambah, id tidak ditemukan');
             redirect('pegawai', 'refresh');
             }
             
         } else {
             $data['id'] = $id;
             $data['nik'] = $this->ortu_model->getDataPegawai($id)->nik;
             $this->templates('master/pegawai/datadiri/orangtua/index', $data);
         }
     }

    }

    public function update($id)
    {
        if(empty($id)) show_404();

        $ortu = $this->ortu_model;
        $validation = $this->form_validation;
        $validation->set_rules($ortu->rules());
    
        if($validation->run()){
            if($ortu->update()){
                $this->session->set_flashdata('sukses', 'diupdate');
            redirect('pegawai', 'refresh');
            } else {
                $this->session->set_flashdata('gagal', 'diupdate');
                redirect('pegawai', 'refresh');    
            }
            
        }
    }
}