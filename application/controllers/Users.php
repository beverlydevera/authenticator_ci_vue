<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Main');
        $this->load->library('session');
        checkLogin();
	}
	
	public function index()
	{
        $data['title'] = "User";
        $data['vueid'] = "users_page";
        $data['js'] = array('pages/users.js');
        $this->load->view('pages/users/index', $data);
    }

    public function logout(){
        $this->session->sess_destroy();
		redirect('login');
    }
    
}