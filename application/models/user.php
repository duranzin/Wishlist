<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{
    
    private $user;
    private $password;
    
    public function __construct(){
        parent::__construct();
    }
    
    public function init_entry($u,$p){
        $this->user=$u;
        $this->password=$p;
    }
      
    public function getUser(){
        return $this->user;
    }
     
    public function getPass(){
        return $this->password;
    }
}

?>

