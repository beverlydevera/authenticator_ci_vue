<?php

if (!function_exists('response_json')) {
	function response_json($data = array())
	{
		$_CI = &get_instance();
		$_CI->output->set_content_type('application/json')->set_output(json_encode($data));
	}
}

function pdie($data = array(), $type = false)
{
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
	if ($type) {
		die();
	}
}

function jsondata()
{
	return json_decode(trim(file_get_contents('php://input')), true);
}

function sesdata($index){
	$_CI =& get_instance();
	return $_CI->session->userdata($index);
}

function checkLogin($type = false){
	$_CI =& get_instance();
	if ($type) {
		if (!empty($_CI->session->userdata('loggedin'))) {
			$status = getUser('status',array('user_id'=>sesdata('id')),'row')->status;
			if ($status == 0) {
				redirect(base_url('users/inactivestat'),'refresh');
			}else{
				redirect(base_url('dashboard/index'),'refresh');
			}
		}
	}else{
		if (empty($_CI->session->userdata('loggedin'))) {
			redirect(base_url('login'),'refresh');
		}
	}
}