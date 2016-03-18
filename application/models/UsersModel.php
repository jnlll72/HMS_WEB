<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UsersModel extends CI_Model{
    
    public function insert($login,$email,$pass){
        $data = array("login_user"=>$login,"email_user"=>$email,"pass_user"=>$pass);
        $query = $this->db->insert('users',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function select($login,$pass){
        $query = $this->db->get_where('users',array('login_user'=>$login,'pass_user'=>$pass));
        if($query->num_rows() == 1){
            return array(TRUE,$query->result_array());
        }else{
            return FALSE;
        }
    }
}