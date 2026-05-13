<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
	}

	public function index()
	{
		$data = array();
		if($this->input->post('submitBtn')){
			$username = htmlspecialchars(strip_tags($this->input->post('username')));
			$password = md5($this->input->post('password'));
			//$user_type = $this->input->post('user_type');
			$userdata = $this->Common_Model->FetchData("erp_users", "*", "(mobile = '".$username."' OR email = '".$username."') AND user_type = 'Student' AND password = '".$password."'");
			$this->db->close();
			if($userdata){
				$studentdata = $this->Common_Model->FetchData("erp_students", "*", "user_id = '".$userdata[0]['user_id']."'");
                $user_details = $userdata[0];
                $this->session->set_userdata($user_details);
                $this->session->set_userdata($studentdata[0]);			
                redirect('dashboard');
			}else{
				$this->session->set_flashdata('error', 'The username/password combination is not correct, please try again !!');
			}
		}
		$data['pagetitle'] = '';
		$data['currentmenu'] = '';
		$data['currentsubmenu'] = '';
		$this->load->view('login', $data);
	}
}
