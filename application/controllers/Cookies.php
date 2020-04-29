<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cookies extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
    }

    function setUserCookie($name, $password)
    {
        $cookie= array(
            'name' => $name,
            'value' => $password,
            'expire' => time() + 1000,
            'secure' => TRUE
        );
        $this->input->set_cookie($cookie);
        echo "cookie set";
    }

    function getUserCookie($name){
        echo $this->input->cookie($name, true);
    }
}