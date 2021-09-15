<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        // Consider if it would be best to autoload some of the helpers from here.
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('html');
        $this->load->helper('cookie');
        // Load in your Models below.
        $this->load->model('HomeModel');
    }

    public function index(){
        // Check to see if the User exists on the homepage. You will need to change this to look up the existance of a cookie.
        $userExists = '';

        //Load data required for web page in array.


        // Change this to whatever title you wish.
        $data['title']       = 'My Games Reviews Website';

        // Condition checking if the user exists.
        if (!$userExists)
        { 
            $data['show'] = true;
            //The user doesn't exist so change your page accordigly.
        }
        else
        {
            $data['show'] = false;
            //The user does exist so change your page accordigly.
        }

        
        // Get the data from our Home Model.
        $data['result'] = $this->HomeModel->getGame();
        
        //Load the view and send the data accross.
        $this->load->view('home', $data);
    }
    //to load all the review for seperate games
    public function review($slug = NULL){
        $data['result'] = $this->HomeModel->getReview($slug);
        $this->load->view('review',$data);
    }
    //code for comments to show
    public function comments($ReviewID){
        $commentData = $this->HomeModel->showComments($ReviewID);
        header('Content-Type: application/json');
        echo json_encode($commentData);
    }
    //inserting comments on the page
    public function insertComments($ReviewID){
        $userID = $this->session->userdata('id');
        $userComment = $this->input->post()['UserComment'];
        $this->HomeModel->insertComment($userID, $ReviewID, $userComment);
    }
}