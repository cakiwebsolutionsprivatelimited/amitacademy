<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->perPage = 10;
		if(!in_array($this->router->fetch_method(),array('loadAlldepartment','loadstream'))){
			is_logged_in();
		}
		date_default_timezone_set('Asia/Kolkata');
	}

	function loadAlldepartment(){
		$department = $this->Common_Model->FetchData("erp_departments", "*");
		if(!empty($department)){
			echo json_encode(array('status' => 200, 'res' => $department));exit;
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong.'));exit;
		}
	}

	function loadstream(){
		$requestData = $this->input->post();
		$deptId      = $requestData['deptId'];
		if($deptId>0){
			$streams = $this->Common_Model->FetchData('erp_stream',"stream_id,stream_name,no_of_sem","department_id = ".$deptId);
		}

		if(!empty($streams)){
			echo json_encode(array('status' => 200, 'res' => $streams));exit;
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong.'));exit;
		}
	}


	function loadsubagainstdept(){
		$requestData = $this->input->post();
		$deptId      = $requestData['deptId'];
		if($deptId>0){
			$subjects = $this->Common_Model->FetchData('erp_subjects',"subject_id,subject_name","department_id = ".$deptId);
		}

		if(!empty($subjects)){
			echo json_encode(array('status' => 200, 'res' => $subjects));exit;
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong.'));exit;
		}
	}


	function loadsubagainststream(){
		$requestData = $this->input->post();
		$streamId    = $requestData['streamId'];
		if($streamId>0){
			$subjects = $this->Common_Model->FetchData('erp_subjects',"subject_id,subject_name","stream_id = ".$streamId);
		}

		if(!empty($subjects)){
			echo json_encode(array('status' => 200, 'res' => $subjects));exit;
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong.'));exit;
		}
	}

	function loadDays(){
		$days = $this->Common_Model->FetchData("erp_day_master", "*");
		if(!empty($days)){
			echo json_encode(array('status' => 200, 'res' => $days));exit;
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong.'));exit;
		}
	}


	function loadSemester(){
		$days = $this->Common_Model->FetchData("erp_semester", "*");
		if(!empty($days)){
			echo json_encode(array('status' => 200, 'res' => $days));exit;
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong.'));exit;
		}
	}


	function loadTaggedEmployee(){
		$requestData = $this->input->post();
		$subject_id    	  = $requestData['subjectId'];
		$data = array();
		if($subject_id>0){
			$employees = $this->db->query("SELECT emp.emp_id,emp.fullname FROM erp_employee_tag emptg inner join erp_employees emp on emptg.emp_id = emp.emp_id where emptg.subject_id = $subject_id group by emp.emp_id");

			$empData = $employees->result_array();
			if(!empty($empData)){
				foreach($empData as $row)
				{
					$data[]=$row;
				}
			}
		}

		if(!empty($data)){
			echo json_encode(array('status' => 200, 'res' => $data));exit;
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong.'));exit;
		}
	}

	function getTaggedDepartment(){
		$requestData = $this->input->post();
		$teacherId    = $requestData['teacherId'];
		if($teacherId>0){
			$department = $this->Common_Model->FetchData("erp_departments", "*", "department_id IN (SELECT department_id FROM erp_employee_tag WHERE emp_id IN (SELECT emp_id FROM erp_employees WHERE user_id = ".$teacherId."))");
		}

		if(!empty($department)){
			echo json_encode(array('status' => 200, 'res' => $department));exit;
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong.'));exit;
		}
	}

	function getTaggedStream(){
		$requestData = $this->input->post();
		$department_id   = $requestData['department_id'];
		$emp_id   		 = $requestData['emp_id'];
		$stream  = array();
		if($department_id>0 && $emp_id>0){
			$stream = $this->Common_Model->FetchData("erp_stream", "*", "department_id in (select department_id from erp_employee_tag where department_id = ".$department_id." and emp_id in (SELECT emp_id FROM erp_employees WHERE user_id = ".$emp_id."))");
		}

		if(!empty($stream)){
			echo json_encode(array('status' => 200, 'res' => $stream));exit;
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong.'));exit;
		}
	}

	function getTaggedSubject(){
		$requestData = $this->input->post();
		$stream_id   = $requestData['stream_id'];
		$emp_id   	 = $requestData['emp_id'];
		$subject  = array();
		if($stream_id>0 && $emp_id>0){
			$subject = $this->Common_Model->FetchData("erp_subjects", "*", "stream_id in (select stream_id from erp_employee_tag where stream_id = ".$stream_id." and emp_id in (SELECT emp_id FROM erp_employees WHERE user_id = ".$emp_id." ))");
		}

		if(!empty($subject)){
			echo json_encode(array('status' => 200, 'res' => $subject));exit;
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong.'));exit;
		}
	}

	function getTaggedUnit(){
		$requestData = $this->input->post();
		$subject_id   = $requestData['subject_id'];
		$unit  = array();
		if($subject_id>0){
			$unit = $this->Common_Model->FetchData("erp_chapters", "*", "subject_id = ".$subject_id);
		}

		if(!empty($unit)){
			echo json_encode(array('status' => 200, 'res' => $unit));exit;
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong.'));exit;
		}
	}

}
