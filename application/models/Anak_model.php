<?php


class Anak_model extends CI_Model {

    protected $table = 'anak';

    public $nik_pegawai;
    public $nama_anak;
    public $tgl_lahiranak;
    public $tmp_lahiranak;
    public $pendidikananak;
    public $jk;
    public $status;

    public function rules()
    {
        return [
            ['field' => 'nama_anak',
            'label' => 'nama anak',
            'rules' => 'required'],

            ['field' => 'tgl_lahiranak',
            'label' => 'tanggal lahir anak',
            'rules' => 'required'],

            ['field' => 'tmp_lahiranak',
            'label' => 'tempat lahir',
            'rules' => 'required'],

            ['field' => 'pendidikananak',
            'label' => 'pendidikan anak',
            'rules' => 'required'],

        ];
    }

    public function cekData($id)
    {
       $hasil = $this->db->get_where('pegawai', ['id' => $id])->num_rows();
       if($hasil == 1){
           return true;
       } else {
           return false;
       }
    }

    public function getData($nik)
    {
        return $this->db->get_where($this->table, ['nik_pegawai' => $nik])->result_object();
 }

    
    public function cekNik($nik)
    {
        $hasil = $this->db->get_where($this->table, ['nik_pegawai' => $nik])->num_rows();
        if($hasil > 1){
           return true;
       } else {
           return false;
       }
    }

    public function cekIdAnak($id)
    {
        $hasil = $this->db->get_where($this->table, ['id_anak' => $id])->num_rows();
        if($hasil == 1){
           return true;
       } else {
           return false;
       }
    }


    public function getDataPegawai($id)
    {
        $validasi = $this->db->get_where('pegawai', ['id' => $id])->num_rows();
        if($validasi > 0){
            return $this->db->get_where('pegawai', ['id' => $id])->row();
        } else {
            return false;
        }
    }

    public function save()
    {
        $post = $this->input->post();


        $this->nik_pegawai= $post['nik'];
        $this->nama_anak = $post['nama_anak'];
        $this->tgl_lahiranak = $post['tgl_lahiranak'];
        $this->tmp_lahiranak = $post['tmp_lahiranak'];
        $this->pendidikananak = $post['pendidikananak'];
        $this->jk = $post['jk'];
        $this->status = $post['statusanak'];

        $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();

        $id = $post['id'];
        $this->nik_pegawai = $post['nik'];
        $this->nama_anak = $post['nama_anak'];
        $this->tgl_lahiranak =  $post['tgl_lahiranak'];
        $this->tmp_lahiranak =  $post['tmp_lahiranak'];
        $this->pendidikananak =  $post['pendidikananak'];
        $this->jk = $post['jk'];
        $this->status =  $post['statusanak'];

       
            $this->db->update($this->table, $this, ['id_anak' => $id]);
        
    }

    public function getDetailAnakById($id)
    {
    return $this->db->get_where($this->table, ['id_anak' => $id])->row();
    }

    public function getAnakById($id)
    {
        $result = $this->db->get_where($this->table, ['id_anak' => $id])->num_rows();
        if($result == 1){
            return true;
        } else {
            return false;
        }

    }

    public function delete($id)
    {
        $this->db->delete($this->table, ['id_anak' => $id]);
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

}