<?php

class Pekerjaan extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->load->model('pekerjaan_model');
        $this->load->library('form_validation');
    }

    public function store($id)
    {
        if(empty($id)) show_404();

         if($this->pekerjaan_model->getDataPegawai($id)) {

            $pekerjaan = $this->pekerjaan_model;
            $validation = $this->form_validation;
            $validation->set_rules($pekerjaan->rules());
            $nik = $pekerjaan->getDataPegawai($id)->nik;
   
            if($pekerjaan->cekNik($nik)){
               $data['data'] = $pekerjaan->getData($nik);
               $this->templates('master/pegawai/datadiri/pekerjaan/view_pekerjaan', $data);
           } else {
            if($validation->run()){
                if($pekerjaan->cekData($id)){
                    $pekerjaan->save();
                    $this->session->set_flashdata('sukses', 'ditambah');
                    redirect('pegawai', 'refresh');
                } else {
                $this->session->set_flashdata('gagal', 'ditambah, id tidak ditemukan');
                redirect('pegawai', 'refresh');
                }
                
            } else {
   
                   $data['id'] = $id;
                   $data['nik'] = $nik;
                   $this->templates('master/pegawai/datadiri/pekerjaan/store', $data);          
   
                }
              
            }
   

         } else {
             redirect('pegawai', 'refresh');
         }

    }

    public function edit($id)
    {
        if(empty($id)) show_404();

        $pekerjaan = $this->pekerjaan_model;

        if($pekerjaan->cekIdPekerjaan($id)){
            $data['pekerjaan'] = $pekerjaan->getDetailpekerjaanById($id);
            $this->templates('master/pegawai/datadiri/pekerjaan/data_pekerjaan/update', $data);
        } else {
            redirect('pegawai', 'refresh');
        }
        
    }

    public function update($id)
    {
        if(empty($id)) show_404();

        $pekerjaan = $this->pekerjaan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pekerjaan->rules());
    
        if($validation->run()){
            $pekerjaan->update();
            $this->session->set_flashdata('sukses', 'diupdate');
            redirect('pegawai', 'refresh');
        
        }
    }

    public function delete($id)
    {
        if(empty($id)) show_404();

        $pekerjaan = $this->pekerjaan_model;
        
        if($pekerjaan->cekIdPekerjaan($id)) {
        if($pekerjaan->delete($id)){
            $this->session->set_flashdata('sukses', 'dihapus');
            redirect('pegawai', 'refresh');
        } else {
            $this->session->set_flashdata('gagal', 'dihapus');
            redirect('pegawai', 'refresh');
        }
       
        } else {
            redirect('pegawai', 'refresh');
        }
        
    }
}