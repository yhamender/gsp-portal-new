<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller{
    
    /*
     * Constructor 
     */
    public function __construct() {
        parent::__construct();
    }
    
    /*
     * Index function
     */
    public function index(){
        $this->session->unset_userdata(array('USERNAME', 'USER_ID'));
        $this->session->set_flashdata('success', 'Successfully logged out!');
	redirect(base_url('login'));
    }
}

