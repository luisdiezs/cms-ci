<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_lib
{
    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('admin/usuarios_mod', 'musuarios');
    }

    public function get_usuarios($uid = 0)
    {
        if(empty($uid))
            return $this->ci->musuarios->get_all_users();

        return $this->ci->musuarios->get_user($uid);
    }
}