<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_mod extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // obtiene los datos de todos los usuarios de la tabla
    public function get_all_users()
    {
        $query = $this->db->query('SELECT uid, usuario, perfil, nombres, apellidos, correo, cargo, estado, fecha_registro FROM usuarios');
        
        $usuarios = array();
        if(!empty($query->result()))
        {
            foreach ($query->result() as $row)
            {
                $usuarios[$uid] = $row;
            }
        }
        return $usuarios;
    }

    // obtiene los datos de un usuario específico a traves de su ID
    public function get_user($uid)
    {
        $query = $this->db->query("SELECT uid, usuario, perfil, nombres, apellidos, correo, cargo, estado, fecha_registro FROM usuarios WHERE uid = {$uid}");
        
        $usuarios = array();
        if(!empty($query->result()))
        {
            foreach ($query->result() as $row)
            {
                $usuarios[$uid] = $row;
            }
        }
        return $usuarios;
    }

    public function save_user($new_user)
    {
        $this->db->insert('usuarios', $new_user);
    }

    public function login($user)
    {
        $query = $this->db->query("SELECT uid, usuario, clave FROM usuarios WHERE usuario = '{$user}' LIMIT 1");

        $usuario = array();
        if(!empty($query->result()))
        {
            foreach ($query->result() as $row)
            {
                $usuario[$row->usuario] = $row;
            }
        }
        return $usuario;
    }

}