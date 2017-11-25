<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function __construct() {
		parent::__construct();
		$this->load->model('User_model', 'user');
		$this->load->library('form_validation');
	}

	function index()
	{
		$this->load->view('Superadmin');
	}

	function select_user() {
		$data = $this->user->select_table("user");
		
	}

	function user_login() {
	 	$data = $this->input->get();
	 	$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
	    $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');
	   if($this->form_validation->run() == FALSE) {
	 	 if (isset($data["username"]) && isset($data["password"])) {
	 	   $result = $this->user->checkCredentials($data["username"], $data["password"]);
	 		if( count($result) ==0 )  {
	 			$token = array("token" => 4716481726321);
	 			$this->r(false, "Login Credentials Failed", $token);
	 		}
	 		else $this->r(true, "Login Credentials Sucess");
	     }
	   } else $this->r(false, "Form Validation Invalid");
    }

}
?>