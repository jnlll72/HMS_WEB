<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SessionController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library("form_validation");
    }

    public function index(){
        $this->form_validation->set_rules('txt_login', 'Login', 'callback_check_login');
        $this->form_validation->set_rules('txt_pass', 'Password', 'callback_check_pass');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('header');
            $this->load->view('connexion');
            $this->load->view('footer');
        }else{
            $login = $this->input->post('txt_login');
            $pass = sha1($this->input->post('txt_pass'));

            //test select du model user
            $result = $this->users->select($login,$pass);

            //test result, si TRUE c'est que l'utilisateur existe sinon on redirige vers le formulaire
            if($result[0]){
                $array = $result[1];
                foreach($array as $value){
                    $data = array("login"=> $value['login_user']);
                }
                $this->session->set_userdata($data);
                redirect('','refresh');
            }else{
                $this->load->view('header');
                $this->load->view('connexion');
                $this->load->view('footer');
            }
        }
    }

    //fonction check si le login est NULL
    public function check_login($str){
        if($str != NULL){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    //fonction check si le pass est NULL
    public function check_pass($str){
        if($str != NULL){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function deconnexion(){
        $this->session->unset_userdata("login");
        $this->session->sess_destroy();
        $array = array("login"=>"");
        $this->session->set_userdata($array);
        redirect('','refresh');
    }
}