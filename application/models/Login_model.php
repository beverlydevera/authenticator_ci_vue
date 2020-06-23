<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
    }
    
    public function checkUserAuth($username="",$password=""){
        //check in database
        if($username == 'testuser' && $password == 'password'){
            return true;
        }else{
            return false;
        }
    }
}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */