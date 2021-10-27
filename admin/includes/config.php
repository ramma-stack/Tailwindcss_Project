<?php

class Config{

    public $db;

    public function __construct(){
        $this->connection();
    }

    public function connection(){
      global $db;
    //   error_reporting(0);
      $db = new mysqli('localhost','root','','home');
      if($db->connect_error){
         echo "Error Connection"; 
      }
    }

    public function query($query){
        global $db;
        $query = $db->query($query);
        if(!$query){
            echo "Error Query";
        }else{
            return $query;
        }
    }

}

$config = new Config(); 

