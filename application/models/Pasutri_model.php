<?php

class Pasutri_model extends CI_Model 
{
    protected $table = 'pasutri';   
    public $nama;
    public $tgl_lahir;
    public $tmp_lahir;
    public $pendidikan;
    public $status;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'tgl_lahir',
            'label' => 'tanggal lahir',
            'rules' => 'required'],

            ['field' => 'tmp_lahir',
            'label' => 'tempat lahir',
            'rules' => 'required'],

            ['field' => 'pendidikan',
            'label' => 'pendidikan',
            'rules' => 'required']
        ];
    }

    public function getData($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function cekDb($id)
    {
        $hasil = $this->db->get_where($this->table, ['id' => $id])->num_rows();
       if($hasil == 1){
           return true;
       } else {
           return false;
       }
    }

    public function cekData($id)
    {
        $hasil = $this->db->get_where('pegawai', ['id' => $id])->num_rows();
        if($hasil > 0){
            return true;
        } else {
            return false;
        }
    }

    public function save()
    {
        $post = $this->input->post();

        $this->id = $post['id'];
        $this->nama = $post['nama'];
        $this->tgl_lahir = $post['tgl_lahir'];
        $this->tmp_lahir = $post['tmp_lahir'];
        $this->pendidikan = $post['pendidikan'];
        $this->status = $post['status'];

        $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();

        $this->id = $post['id'];
        $this->nama = $post['nama'];
        $this->tgl_lahir = $post['tgl_lahir'];
        $this->tmp_lahir = $post['tmp_lahir'];
        $this->pendidikan = $post['pendidikan'];
        $this->status = $post['status'];

        if($this->cekData($this->id)){
            $this->db->update($this->table, $this, ['id' => $this->id]);
            return true;
        } else {
            return false;
        }
        
    }
}