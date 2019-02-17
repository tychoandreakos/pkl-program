<?php

class Barang_model extends CI_Model {


    protected $table = 'barang';
    
    public $id;
    public $nama;
    public $harga;

    public function rules()
    {
        return [
            ['field' => 'nmbarang',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'harga',
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
        $this->nama = $post['nmbarang'];
        $this->harga = $post['harga'];

       $this->db->insert($this->table, $this);
    }

    public function getById($id)
    {
       return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function count()
    {
        return $this->db->count_all_results($this->table);
    }

    public function editData()
    {
        $post = $this->input->post();

        $this->id = $post['id'];
        $this->nama = $post['nmbarang'];
        $this->harga = $post['harga'];

       $this->db->update($this->table, $this, ['id' => $this->id]);
    }

    public function deleteData($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }

}