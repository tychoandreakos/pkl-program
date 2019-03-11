<?php

class Pegawai_model extends CI_Model {

    protected $table = 'pegawai';

    public $nik;
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

    // nik :
    // tgl_lahir, tgl_join, jk, no_urut

   

    public function save()
    {
        $post = $this->input->post();

        $this->nik = uniqid();
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


    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('orangtua', 'orangtua.nik_pegawai = pegawai.nik', 'left');
        $this->db->join('pasutri', 'pasutri.nik_pegawai = pegawai.nik', 'left');
        $this->db->join('pendidikan', 'pendidikan.nik_pegawai = pegawai.nik', 'left');
        $this->db->Where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function anakbyNik($nik)
    {
       return $this->db->get_where('anak', ['nik_pegawai' => $nik])->result_object();
    }

    public function getDataPegawai($id){
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }


    public function editData(){
        $post = $this->input->post();

        $id = $post['id'];
        $this->nik = $post['nik'];
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
            $this->db->update($this->table, $this, ['id' => $id]);
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