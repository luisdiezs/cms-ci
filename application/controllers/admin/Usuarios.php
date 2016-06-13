<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('admin/usuarios_lib');
    }

    public function index()
    {
        $data['_page'] = 'admin/usuarios/usuarios';
        $data['usuarios'] = $this->usuarios_lib->get_user();
        $this->load->view('dashboard', $data);
    }

    public function nuevo()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $data['_page'] = 'admin/usuarios/nuevo';
        
        var_dump($this->form_validation->run('nuevo_usuario'));
        if(!empty($_POST))#if($this->form_validation->run('nuevo_usuario') == true)
        {
            $this->usuarios_lib->save_user();
        }

        $this->load->view('dashboard', $data);
    }

    public function perfil()
    {
        $data['_page'] = 'admin/usuarios/perfil';
        $data['usuarios'] = $this->usuarios_lib->get_user();
        $this->load->view('dashboard', $data);
    }
}
