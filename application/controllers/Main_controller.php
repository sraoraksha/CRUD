<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller{
    public function index(){
        $this->load->view('main_form');
    }

    public function insert()
    {
        $data=array(
            'name'=> $this->input->post('name'),
            'email'=> $this->input->post('email'),
            'password'=> $this->input->post('password')
        );
          
        $res="";
        $this->load->model('Main_model');
        $result=$this->Main_model->insert_function($data);
        
        if($result==true){
            $res="success";
        }
        else{
            $res="fail";
        }
       echo json_encode($res) ;
    }
}

?>