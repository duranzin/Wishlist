<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MyController extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('database');
    }
    
    public function index(){
        $this->load->model('product');
        $dbProduct=new DataBase();
        $products=$dbProduct->showProducts();
        $data['products']=$products;
        $this->load->view('default',$data);
    }
    
    public function goLogin(){
        $this->load->view('login');
    }
    
    public function goSignup(){
        $this->load->view('signup');
    }
    
    public function goWishList(){
        $data['user']=$this->input->post('user');
        $this->load->view('wishlist',$data);
    }
    
    public function isLogin(){
        $this->load->model('user');
        
        $usu=$this->input->post('user_id');
        $pass=$this->input->post('password');
        
        $user=new User();
        $user->init_entry($usu,$pass);
        
        $dbUser=new DataBase();
        
        if ($dbUser->isUser($user)){       
            $data['user']=$usu;
            $this->load->model('product');
            $dbProduct=new DataBase();
            $products=$dbProduct->showProducts();
            $data['products']=$products;
            $this->load->view('default',$data);
        }
        else{                     
              $data['error']='Invalid user!';
              $this->load->view('login',$data);
        } 
    }
    
    public function newUser(){
        $data['user']=$this->input->post('newuser');
        $query = $this->database->signup();
        if($query){
            $this->load->model('product');
            $dbProduct=new DataBase();
            $products=$dbProduct->showProducts();
            $data['products']=$products;
            $this->load->view('default',$data);
        }else{
            $this->load->view('register');
        }
    }
    
    public function selectProduct(){
        $this->load->model('product');
        $dbProduct=new DataBase();
        $products=$dbProduct->showProducts();
        $data['products']=$products;
        $this->load->view('default', $data);
    }
    
    public function showList(){
        // This is the last line.
    }
    
    public function addToList(){
        $this->load->model('user');
        $this->load->model('product');
        $useradd=$this->input->post('user');
        $productadd=$this->input->post('prod');
        $dbList=new DataBase();
        $myID=$dbList->idUser($useradd);
        $products=$dbList->showProducts();
        $data['products']=$products;
        
        $myList=$dbList->myList($myID, $productadd);
        if($myList==1){
            $this->load->view('default', $data);
        }else{
            $data['error']=$myList;
            $this->load->view('default', $data);
        }
        
        // Here i have an error if i try to select a product that actually is in the list.
    }
    
}

?>
