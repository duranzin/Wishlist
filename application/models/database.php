<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DataBase extends CI_Model{
    
    public function isUser($user){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user',$user->getUser());
        $this->db->where('password',$user->getPass());
        $query=$this->db->get();
        if ($query->num_rows()==1)
            return true;
        return false;
    }
    
    public function idUser($user){
        $this->load->model('user');
        $this->db->select('id_user');
        $this->db->from('users');
        $this->db->where('user',$user);
        $query=$this->db->get();
        if ($query->num_rows()==1)
            $data = $query->result_array();
            return ($data[0]['id_user']);
        return "";
    }
    
    public function idProduct($user){
        $this->load->model('user');
        $this->db->select('id_product');
        $this->db->from('list');
        $this->db->where('id_user',$user);
        $query=$this->db->get();
        if ($query->num_rows()==1)
            $data = $query->result_array();
            return ($data[0]['id_product']);
        return "";
    }
    
    public function signup(){
        $user = $this->input->post('newuser');
        $password = $this->input->post('newpassword');
        $email = $this->input->post('newemail');
        $data = array('user'=>$user,'password'=>$password,'email'=>$email);
        $this->db->insert('users',$data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
       
    public function showProducts(){
        $this->load->model('product');
        $all = array();
        $this->db->select('*');
        $this->db->from('products');
        $query=$this->db->get();

        foreach($query->result() as $row){
            $product = new Product();
            $product->init_entry($row->id_product,$row->name, $row->description, $row->price, $row->img);
            array_push($all, $product);
        }
        return $all;
    }
    
    public function myList($user, $product){
        $this->db->select('*');
        $this->db->from('list');
        $this->db->where('id_user',$user);
        $this->db->where('id_product',$product);
        $query=$this->db->get();
        if ($query->num_rows() > 0){
            return 0;
        }else{
            $data = array('id_user'=>$user,'id_product'=>$product);
            $this->db->insert('list',$data);
            return 1;
        }
    }
    
    public function showList(){
        $this->load->model('product');
        $list = array();
        $this->db->select('');
        $this->db->from('products');
        $query=$this->db->get();

        foreach($query->result() as $row){
            $product = new Product();
            $product->init_entry($row->id_product,$row->name, $row->description, $row->price, $row->img);
            array_push($all, $product);
        }
        return $all;
    }
     
}
?>
