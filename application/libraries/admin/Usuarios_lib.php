<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_lib
{
    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('admin/usuarios_mod', 'musuarios');
    }

    // obtiene los datos de todos los usuarios, si se envía el UID se obtendrá solo los datos de ese usuario
    public function get_user($uid = 0)
    {
        if(empty($uid))
            return $this->ci->musuarios->get_all_users();

        return $this->ci->musuarios->get_user($uid);
    }

    public function save_user()
    {
        print_r($_POST);
        if(!empty($_POST))
        {
            $this->ci->load->library('encryption');
            $new_user = array(
                'nombres' => $this->ci->input->post('nombres', true),
                'apellidos' => $this->ci->input->post('apellidos', true),
                'correo' => $this->ci->input->post('correo', true),
                'cargo' => $this->ci->input->post('cargo', true),
                'perfil' => $this->ci->input->post('perfil', true),
                'usuario' => $this->ci->input->post('usuario', true),
                'clave' => $this->ci->encryption->encrypt($this->ci->input->post('clave', true)),
                'estado' => $this->ci->input->post('estado', true),
            );

            $this->ci->db->insert('usuarios', $new_user);
        }
    }
}