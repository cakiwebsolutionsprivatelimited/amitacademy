<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->perPage = 10;
		is_logged_in();
		date_default_timezone_set('Asia/Kolkata');
	}

	public function index(){
		is_logged_in();
		$this->load->helper('url');
		$currentURL = current_url();
		$data = array();
		$sql = "user_id != '".$this->session->userdata("user_id")."' AND delete_status = 0";
		$queryvars = "action=listusers";
		if(isset($_REQUEST['username']) && $_REQUEST['username'] != ''){
			$sql.= " AND username LIKE '%".$_REQUEST['username']."%'";
			$queryvars.= "&username=".$_REQUEST['username'];
		}
		if(isset($_REQUEST['email']) && $_REQUEST['email'] != ''){
			$sql.= " AND email LIKE '%".$_REQUEST['email']."%'";
			$queryvars.= "&email=".$_REQUEST['email'];
		}
		if(isset($_REQUEST['fullname']) && $_REQUEST['fullname'] != ''){
			$sql.= " AND fullname LIKE '%".$_REQUEST['fullname']."%'";
			$queryvars.= "&fullname=".$_REQUEST['fullname'];
		}
		if(isset($_REQUEST['mobile']) && $_REQUEST['mobile'] != ''){
			$sql.= " AND mobile LIKE '%".$_REQUEST['mobile']."%'";
			$queryvars.= "&mobile=".$_REQUEST['mobile'];
		}
		if(isset($_REQUEST['user_type']) && $_REQUEST['user_type'] != ''){
			$sql.= " AND user_type = '".$_REQUEST['user_type']."'";
			$queryvars.= "&user_type=".$_REQUEST['user_type'];
		}
		if(isset($_REQUEST['shop_id']) && $_REQUEST['shop_id'] != ''){
			$sql.= " AND shop_id = '".$_REQUEST['shop_id']."'";
			$queryvars.= "&shop_id=".$_REQUEST['shop_id'];
		}
		$sql.= " ORDER BY user_id DESC";
		$rows = $this->Common_Model->FetchRows("users", "*", $sql);
		$data['page_num'] = $page_num = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		$this->load->library("Paginator",array("page_num" => $page_num, "num_rows" => $rows));
		$this->paginator->set_Limit(20);

		$range1 = $this->paginator->getRange1();
		$range2 = $this->paginator->getRange2();

		$sql .= " LIMIT ".$range1.', '.$range2;
		$records = $this->Common_Model->db_query("SELECT * FROM users WHERE ".$sql);
		$paging_info = $this->paginator->DBPagingNav($queryvars, $currentURL);
		$data['tot_page'] = $paging_info[0];
		$data['sPages'] = $paging_info[1];
		$data['rows'] = $rows;
		$data['records'] = $records;
		$data['pagetitle'] = 'OnlineExam - Users List';
		$data['currentmenu'] = 'master';
		$data['currentsubmenu'] = 'users';
		$this->load->view('users/listusers', $data);
	}

	function add_user(){
		is_logged_in();
		$data = array();
		if($this->input->post('submitBtn')){
			$this->form_validation->set_rules('fullname', 'Fullname', 'trim|required');
			$this->form_validation->set_rules('user_type', 'User Type', 'trim|required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">', '</label></p>');
			if($this->form_validation->run()){
				$data_list = array(
					"fullname"		=> $this->input->post("fullname"),
					"user_type"		=> $this->input->post("user_type"),
					"mobile"		=> $this->input->post("mobile"),
					"email"			=> $this->input->post("email"),
					"password"		=> md5($this->input->post("password")),
					'user_status'	=> $this->input->post("user_status"),
					"created_by"	=> $this->session->userdata("user_id"),
					"created_on"	=> date("Y-m-d H:i:s")
				);
				$user_id = $this->Common_Model->dbinsertid("users", $data_list);
				$this->session->set_flashdata('success', 'User Added successfully.' );
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		$data['pagetitle'] = 'OnlineExam - Add User';
		$data['currentmenu'] = 'master';
		$data['currentsubmenu'] = 'users';
		$this->load->view('users/add_user', $data);
	}

	function edit_user($user_id = 0){
		is_logged_in();
		$data = array();
		if($this->input->post('submitBtn')){
			$this->form_validation->set_rules('fullname', 'Fullname', 'trim|required');
			$this->form_validation->set_rules('user_type', 'User Type', 'trim|required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">', '</label></p>');
			if($this->form_validation->run()){
				$data_list = array(
					"fullname"		=> $this->input->post("fullname"),
					"user_type"		=> $this->input->post("user_type"),
					"mobile"		=> $this->input->post("mobile"),
					"email"			=> $this->input->post("email"),
					'user_status'	=> $this->input->post("user_status")
				);
				if($this->input->post("password") != ''){
					$data_list['password'] = md5($this->input->post("password"));
				}
				$book_id = $this->Common_Model->update_records("users", "user_id", $user_id, $data_list);
				$this->session->set_flashdata('success', 'User updated successfully.' );
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		$data['pagetitle'] = 'OnlineExam - Edit User';
		$data['currentmenu'] = 'master';
		$data['currentsubmenu'] = 'users';
		$data['user'] = $this->Common_Model->FetchData("users", "*", "user_id = '$user_id'");
		$this->load->view('users/edit_user', $data);
	}

	function delete_user($user_id = 0){
		is_logged_in();
		$this->Common_Model->update_records("users", "user_id", $user_id, array("delete_status" => 0));
		$this->session->set_flashdata('success', 'User deleted successfully.' );
		redirect("users");
	}

	function change_password(){
		
	}

	function logout(){
		$this->session->sess_destroy();
		redirect("dashboard");
	}
}
