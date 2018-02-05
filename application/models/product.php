<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model{
    
    private $id_product;
    private $name;
    private $description;
    private $price;
    private $img;
    
    public function __construct(){
        parent::__construct();
    }
    
    public function init_entry($i,$n,$d,$p,$im){
        $this->id_product=$i;
        $this->name=$n;
        $this->description=$d;
        $this->price=$p;
        $this->img=$im;
    }
      
    public function getName(){
        return $this->name;
    }
     
    public function getDescription(){
        return $this->description;
    }
    
    public function getPrice(){
        return $this->price;
    }
    
    public function getImg(){
        return $this->img;
    }
}

?>