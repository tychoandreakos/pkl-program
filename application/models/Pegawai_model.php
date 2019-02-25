<?php

class Pegawai_model extends CI_Model {

    protected $table = 'pegawai';

    public $id;
    public $nama;
    public $alamat;
    public $tgl_lahir;
    public $tmp_lahir;
    public $jk;
    public $no_telp;
    public $status;
    public $email;
    public $gol_darah;
    public $agama;
          
    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'tgl_lahir',
            'label' => 'tanggal lahir',
            'rules' => 'required'],

            ['field' => 'tmp_lahir',
            'label' => 'tempat lahir',
            'rules' => 'required'],

            ['field' => 'no_telp',
            'label' => 'nomer telepon',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'status',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'valid_email'],

            ['field' => 'agama',
            'label' => 'agama',
            'rules' => 'required']
        ];
    }

    public function cekTgl($date)
    {
        $valid = [
            "januari",
            'februari',
            'maret',
            'april',
            'mei',
            'juni',
            'juli',
            'agustus',
            'september',
            'oktober',
            'november',
            'desember'
        ];

        $arr = explode(' ', $date);
        if($arr[0] <= 31){
            if(in_array(strtolower($arr[1]), $valid)){
                if($arr[2] <= '2022' && $arr[2]>= '1960'){
                    return $date;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
        
    }

    public function save()
    {
        $post = $this->input->post();

        $this->id = uniqid();
        $this->nama = $post['nama'];
        $this->alamat = $post['alamat'];
        $this->tgl_lahir = $this->cekTgl($post['tgl_lahir']);
        $this->tmp_lahir = $post['tmp_lahir'];
        $this->jk = $post['jk'];
        $this->no_telp = $post['no_telp'];
        $this->status = $post['status'];
        $this->email = $post['email'];
        $this->gol_darah = $post['gol_darah'];
        $this->agama = $post['agama'];
      
        $this->db->insert($this->table, $this);
    }


    public function getAll()
    {
        
        return $this->db->get($this->table)->result();
        
    }

    public function count()
    {
        return $this->db->count_all_results($this->table);
    }

    public function getByIdOrtu($id)
    {
        return $this->db->get_where('orangtua', ['id' => $id])->row();
    }

    public function getByIdStatus($id)
    {
        return $this->db->get_where('pasutri', ['id' => $id])->row();
    }

    public function getByIdPendidikan($id)
    {
        return $this->db->get_where('pendidikan', ['id' => $id])->row();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
       
    }

    public function editData(){
        $post = $this->input->post();

        $this->id = $post['id'];
        $this->nama = $post['nama'];
        $this->alamat = $post['alamat'];
        $this->tgl_lahir = $this->cekTgl($post['tgl_lahir']);
        $this->tmp_lahir = $post['tmp_lahir'];
        $this->jk = $post['jk'];
        $this->no_telp = $post['no_telp'];
        $this->status = $post['status'];
        $this->email = $post['email'];
        $this->gol_darah = $post['gol_darah'];
        $this->agama = $post['agama'];

        if($this->tgl_lahir = $this->cekTgl($post['tgl_lahir'])){
            $this->db->update($this->table, $this, ['id' => $this->id]);
            return true;
        } else {
            return false;
        }

       
    }

    public function deleteData($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
   
}