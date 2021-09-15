<?php
class LoginModel extends CI_Model{
   public function __construct(){
       $this->load->database();
   }
    //getting details for login from database.
    public function LoginUser($userName,$userPassword){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('UserName', $userName);
        $this->db->where('UserPassword', $userPassword);
        $query = $this->db->get();
        return $query->result();
    }
}