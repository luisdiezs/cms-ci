<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('admin/usuarios_lib');
    }

    public function index()
    {
        $this->load->helper(array('form', 'url', 'general'));
        $this->load->library('form_validation');
        $data = array();

        if(!empty($_POST))#if($this->form_validation->run('login') == true)
        {
            $login = $this->usuarios_lib->login();
            
            if($login == true)
                header("Location: " . base_url());
        }

        $this->load->view('admin/login/login', $data);
    }
}
