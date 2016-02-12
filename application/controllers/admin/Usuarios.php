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
        $data['usuarios'] = $this->usuarios_lib->get_usuarios();
        $this->load->view('dashboard', $data);
    }

    public function nuevo()
    {
        $data['_page'] = 'admin/usuarios/nuevo';
        $data['usuarios'] = $this->usuarios_lib->get_usuarios();
        $this->load->view('dashboard', $data);
    }

    public function perfil()
    {
        $data['_page'] = 'admin/usuarios/perfil';
        $data['usuarios'] = $this->usuarios_lib->get_usuarios();
        $this->load->view('dashboard', $data);
    }
}
