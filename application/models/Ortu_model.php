<?php


class Ortu_model extends CI_model {
    
    protected $table = 'orangtua';
    public $id_orgtua;
    public $nik_pegawai;
    public $nama_ayah;
    public $tgl_lahir_ayah;
    public $tmp_lahir_ayah;
    public $pend_ayah;
    public $nama_ibu;
    public $tgl_lahir_ibu;
    public $pend_ibu;

    public function rules()
    {
        return [
            ['field' => 'namaayah',
            'label' => 'nama ayah',
            'rules' => 'required'],

            ['field' => 'tgl_lahirayah',
            'label' => 'tanggal lahir ayah',
            'rules' => 'required'],

            ['field' => 'tmp_lahirayah',
            'label' => 'tempat lahir ayah',
            'rules' => 'required'],

            ['field' => 'pendidikanayah',
            'label' => 'pendidikan ayah',
            'rules' => 'required'],

            ['field' => 'namaibu',
            'label' => 'nama ibu',
            'rules' => 'required'],

            ['field' => 'tgl_lahiribu',
            'label' => 'tanggal lahir ibu',
            'rules' => 'required'],

            ['field' => 'tmp_lahiribu',
            'label' => 'tempat lahir ibu',
            'rules' => 'required'],

            ['field' => 'pendidikanibu',
            'label' => 'pendidikan ibu',
            'rules' => 'required']
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

    public function getData($id)
    {
        return $this->db->get_where($this->table, ['id_orgtua' => $id])->row();
    }

    
    public function cekDb($id)
    {
        $hasil = $this->db->get_where($this->table, ['id_orgtua' => $id])->num_rows();
       if($hasil == 1){
           return true;
       } else {
           return false;
       }
    }

    public function getDataPegawai($id)
    {
        return $this->db->get_where('pegawai', ['id' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        
        $this->id_orgtua = $post['id'];
        $this->nik_pegawai = $post['nik'];
        $this->nama_ayah = $post['namaayah'];
        $this->tgl_lahir_ayah = $post['tgl_lahirayah'];
        $this->tmp_lahir_ayah = $post['tmp_lahirayah'];
        $this->pend_ayah = $post['pendidikanayah'];
        $this->nama_ibu = $post['namaibu'];
        $this->tgl_lahir_ibu = $post['tgl_lahiribu'];
        $this->tmp_lahir_ibu = $post['tmp_lahiribu'];
        $this->pend_ibu = $post['pendidikanibu'];

      
        $this->db->insert($this->table, $this);
        
    }

    public function update()
    {
        $post = $this->input->post();

        $this->id_orgtua = $post['id_orgtua'];
        $this->nik_pegawai = $post['nik'];
        $this->nama_ayah = $post['namaayah'];
        $this->tgl_lahir_ayah = $post['tgl_lahirayah'];
        $this->tmp_lahir_ayah = $post['tmp_lahirayah'];
        $this->pend_ayah = $post['pendidikanayah'];
        $this->nama_ibu = $post['namaibu'];
        $this->tgl_lahir_ibu = $post['tgl_lahiribu'];
        $this->tmp_lahir_ibu = $post['tmp_lahiribu'];
        $this->pend_ibu = $post['pendidikanibu'];
        
        if($this->cekData($this->id_orgtua)){
            $this->db->update($this->table, $this, ['id_orgtua' => $this->id_orgtua]);
            return true;
        } else {
            return false;
        }
       
    }
}