<?php


Class Auth_model extends CI_Model {

    protected $table = 'auth';
    protected $username;

    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required' 
            ], 
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'  
            ]
        ];
    }

    public function cekUsername($username)
    {

        if($username)
        {
            $sql = 'SELECT * FROM auth WHERE username = ?';
            $query = $this->db->query($sql, array($username));
			$result = $query->num_rows();
			return ($result == 1) ? true : false;
        }

        return false;

    }

    public function login()
    {
        $post = $this->input->post();
        $username = strtolower($post['username']);
        $password = strtolower($post['password']);
        
        if($username && $password)
        {
            $sql = "SELECT * FROM auth WHERE username = ?";
            $query = $this->db->query($sql, array($username));
            
            if($query->num_rows() == 1){
                $result = $query->row_array();
                
                

                // cek password
                if(password_verify($password, $result['password'])){
                    return $result;
                   
                }
            }
        }
    }
}