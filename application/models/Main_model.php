<?php

class Main_model extends CI_Model{
    function __construct(){
        $this->load->database();
    }

    public function insert_function($data){
      
       $res=$this->db->insert('sample',$data);
        if($res==true){
            return true;
        }
        else{
            return false;
        }
    }
}
?>