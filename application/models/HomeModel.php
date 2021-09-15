<?php
class HomeModel extends CI_Model{
    public function __construct(){
         $this->load->database();
    }
    //Get for all the games
    public function getGame(){
        // You can use the select, from, and where functions to simplify this as seen in Week 13.
         $query = $this->db->query("SELECT * FROM activereviews");
         return $query->result();
    }
    //Get the details for a game once it has been clicked on.
    public function getReview($slug = FALSE){
        $query = $this->db->query("SELECT * FROM activereviews WHERE slug = '$slug'"); 
        return $query->result();
    }
    //code to show comments from database
    public function showComments($ReviewID){
        $query = $this->db->query("SELECT * FROM gamescomments where ReviewID = '$ReviewID'");
        return $query->result();
    }
    public function insertComments($userID, $ReviewID,$userComment){
        $query = $this->db->query("INSERT INTO gamescomments ('UserID','ReviewID','UserComment') VALUES('$UserID', '$ReviewID','$UserComment')");
        return $query->result();
    }
}