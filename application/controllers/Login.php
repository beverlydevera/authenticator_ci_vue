<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Main');
        $this->load->model("Login_model", "login");
        $this->load->library('session');
        checkLogin($type=true);
	}
	
	public function index()
	{
        $data['title'] = "Login";
        $data['vueid'] = "login_page";
        $data['js'] = array('pages/login.js');
        $this->load->view('pages/login', $data);
    }

    public function checkUser()
    {
        $ldata = jsondata();
        $username = $ldata['username'];
        $password = $ldata['password'];

        $result = $this->login->checkUserAuth($username,$password);

        if($result){ 
            $sessiondata = array(
                'loggedin' => true,
                'username' => $username,
                'id'       => 1
            );
            $this->session->set_userdata($sessiondata);
            $message = "You have successfully logged in."; 
        }
        else{ $message="Incorrect Username or Password"; }

        $response = [
            'result'    => $result,
            'message'   => $message
        ];
        response_json($response);
    }    
}