<?php

class Pasutri extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->pasutri =& get_instance();
        $this->load->model('pasutri_model');
        $this->load->library('form_validation');
    }

    public function store($id)
    {
         if(empty($id)) show_404();

         $pasutri = $this->pasutri_model;
         $validation = $this->form_validation;
         $validation->set_rules($pasutri->rules());
 
         if($pasutri->cekDB($id)){
             $data['data'] = $pasutri->getData($id);
             $this->templates('master/pegawai/datadiri/pasutri/update', $data);
         } else {
 
         if($validation->run()){
             if($pasutri->cekData($id)){
                 $pasutri->save();
                 $this->session->set_flashdata('sukses', 'ditambah');
                 redirect('pegawai', 'refresh');
             } else {
             $this->session->set_flashdata('gagal', 'ditambah, id tidak ditemukan');
             redirect('pegawai', 'refresh');
             }
             
         } else {
             $data['id'] = $id;
             $data['nik'] = $this->pasutri_model->getDataPegawai($id)->nik;
             $this->templates('master/pegawai/datadiri/pasutri/index', $data);
         }
     }

    }

    public function update($id)
    {
        if(empty($id)) show_404();

        $pasutri = $this->pasutri_model;
        $validation = $this->form_validation;
        $validation->set_rules($pasutri->rules());
    
        if($validation->run()){
            if($pasutri->update()){
                $this->session->set_flashdata('sukses', 'diupdate');
            redirect('pegawai', 'refresh');
            } else {
                $this->session->set_flashdata('gagal', 'diupdate');
                redirect('pegawai', 'refresh');    
            }
            
        }
    }

    public function cekSuami($data)
    {
        if($data == 0)
        {
            return 'Istri';
        } else if($data == 1)
        {
            return 'Suami';
        }
    }   


}