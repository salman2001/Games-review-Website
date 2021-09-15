<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
        // Consider if it would be best to autoload some of the helpers from here.
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('html');
        $this->load->helper('cookie');
        $this->load->library('session');
        // Load in your Models below.
        $this->load->model('LoginModel');
    }
    public function index(){
        $data['title']= 'Login page';

        if(!$userExists){
            $data['show'] = true;
        }
        else{
            $data['show'] = false;
        }
        $data['head'] = 'login';
        $this->load->view('Login', $data);
    }
//getting the details for login
    public function GetUserDetails(){
        $userName = $this->input->post('uname');
        $UserPassword = $this->input->post('psw');        
        $result = $this->LoginModel->LoginUser($userName, $UserPassword);
        if(!empty($result)){
            $this->session->set_userdata('id', $row->UID);
            $this->session->set_userdata('username', $row->UserName);
            redirect(base_url());
        }
       else{
           echo "Incorrect details";
       }
        
    }
}