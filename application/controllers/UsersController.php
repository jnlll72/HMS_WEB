<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library("form_validation");
    }

    public function index(){
        $this->form_validation->set_rules('txt_login', 'Login', 'callback_check_login');
        $this->form_validation->set_rules('txt_pass', 'Password', 'callback_check_pass');
        $this->form_validation->set_rules('txt_confirm_pass', 'Password', 'matches[txt_pass]|callback_check_pass');
        $this->form_validation->set_rules('txt_email','Email','valid_email|callback_check_email');

        if($this->form_validation->run() == FALSE){
            $this->load->view('header');
            $this->load->view('inscription');
        }else{
            $login = $this->input->post('txt_login');
            $email = $this->input->post('txt_email');
            $pass = sha1($this->input->post('txt_pass'));

            $result = $this->users->insert($login,$email,$pass);

            if($result){
                $this->load->view('header');
                $this->load->view('connexion');
            }else{
                $this->load->view('header');
                $this->load->view('inscription');
            }
        }
    }

    public function check_login($login){
        if(empty($login)){
            return FALSE;
        }else{
            return TRUE;
        }
    }

    public function check_pass($pass){
        if(empty($pass)){
            return FALSE;
        }else{
            return TRUE;
        }
    }

    public function check_email($email){
        if(empty($email)){
            return FALSE;
        }else{
            return TRUE;
        }
    }
}
