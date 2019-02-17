<?php

class Pelanggan_model extends CI_Model {

    protected $table = 'pelanggan';

    public $id;
    public $nama;
    public $alamat;
    public $no_telp;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'no_telp',
            'label' => 'nomer telepon',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama = $post['nama'];
        $this->alamat = $post['alamat'];
        $this->no_telp = $post['no_telp'];

        $this->db->insert($this->table, $this);
    }

    public function editData()
    {
        $post = $this->input->post();

        $this->id = $post['id'];
        $this->nama = $post['nama'];
        $this->alamat = $post['alamat'];
        $this->no_telp = $post['no_telp'];

        $this->db->update($this->table, $this, ['id' => $this->id]);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function count()
    {
        return $this->db->count_all_results($this->table);
    }

    public function deleteData($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}