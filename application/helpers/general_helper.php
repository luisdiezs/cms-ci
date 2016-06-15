<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('validate_login'))
{
    function validate_login()
    {
        session_start();
        $user_login = @$_SESSION['uid'];
        
        if(empty($user_login))
            header("Location: " . base_url() . "admin/login");            
    }
}