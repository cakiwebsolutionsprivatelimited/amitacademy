<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		is_logged_in();
		date_default_timezone_set('Asia/Kolkata');
	}

	public function index()
	{
		$data = array();
		$data['mainmenu'] = 'dashboard';
		$data['submenu'] = 'dashboard';
		$data['records'] = $this->Common_Model->FetchData("erp_exams AS ex LEFT JOIN erp_departments AS d ON ex.exam_department_id = d.department_id LEFT JOIN erp_stream AS s ON ex.exam_stream_id = s.stream_id LEFT JOIN erp_subjects AS sb ON ex.exam_subject_id = sb.subject_id LEFT JOIN erp_exams_question AS q ON ex.exam_id = q.exam_id", "ex.exam_id, ex.exam_title, ex.exam_instruction, ex.exam_duration, ex.exam_positive_mark, ex.exam_negative_mark, ex.exam_answer_type, ex.created_by, ex.created_on, ex.exam_status, COUNT(q.question_id) AS noofques, d.department_name, s.stream_name, sb.subject_name", "ex.exam_department_id = '".$this->session->userdata("department_id")."' AND ex.exam_id NOT IN (SELECT exam_id FROM erp_exams_result WHERE student_id = '".$this->session->userdata("student_id")."') ORDER BY ex.exam_id DESC");
		$this->db->close();
		$this->load->view('dashboard', $data);
	}

	function my_exams(){
		$data = array();
		$data['pagetitle'] = 'My Exams : AMIT College';
		$data['mainmenu'] = 'my_exams';
		$data['currentsubmenu'] = 'my_exams';
		$data['records'] = $this->Common_Model->FetchData("erp_exams AS ex LEFT JOIN erp_departments AS d ON ex.exam_department_id = d.department_id LEFT JOIN erp_stream AS s ON ex.exam_stream_id = s.stream_id LEFT JOIN erp_subjects AS sb ON ex.exam_subject_id = sb.subject_id LEFT JOIN erp_exams_question AS q ON ex.exam_id = q.exam_id", "ex.exam_id, ex.exam_title, ex.exam_instruction, ex.exam_duration, ex.exam_positive_mark, ex.exam_negative_mark, ex.exam_answer_type, ex.created_by, ex.created_on, ex.exam_status, COUNT(q.question_id) AS noofques, d.department_name, s.stream_name, sb.subject_name", "ex.exam_department_id = '".$this->session->userdata("department_id")."' AND ex.exam_status = 'Published' ORDER BY ex.exam_id DESC");
		$this->db->close();
		$this->load->view('myexam', $data);
	}

	function exam_result($exam_id = 0, $student_id = 0){
		$data = array();
		$data['pagetitle'] = 'My Exams : AMIT College';
		$data['mainmenu'] = 'my_exams';
		$data['currentsubmenu'] = 'my_exams';
		$data['examdata'] = $this->Common_Model->FetchData("erp_exams AS ex LEFT JOIN erp_departments AS d ON ex.exam_department_id = d.department_id LEFT JOIN erp_stream AS s ON ex.exam_stream_id = s.stream_id LEFT JOIN erp_subjects AS sb ON ex.exam_subject_id = sb.subject_id LEFT JOIN erp_exams_question AS q ON ex.exam_id = q.exam_id", "ex.exam_id, ex.exam_title, ex.exam_instruction, ex.exam_duration, ex.exam_positive_mark, ex.exam_negative_mark, ex.exam_answer_type, ex.created_by, ex.created_on, ex.exam_status, COUNT(q.question_id) AS noofques, d.department_name, s.stream_name, sb.subject_name", "ex.exam_id = '$exam_id' AND ex.exam_department_id = '".$this->session->userdata("department_id")."' AND ex.exam_status = 'Published' ORDER BY ex.exam_id DESC");
		$data['examresult'] = $this->Common_Model->FetchData("erp_exams_result", "*", "exam_id = '$exam_id' AND student_id = '".$student_id."'");
		$data['resultrank'] = $this->Common_Model->db_query("SELECT `student_id`, `scored_marks`, `scored_percentage`, rank FROM (SELECT `student_id`, `scored_marks`, `scored_percentage`, rank FROM (SELECT `student_id`, `scored_marks`, `scored_percentage`, @curRank := IF(@prevRank = `scored_marks`, @curRank, @incRank) AS rank, @incRank := @incRank + 1, @prevRank := `scored_marks` FROM erp_exams_result p, ( SELECT @curRank :=0, @prevRank := NULL, @incRank := 1 ) r WHERE `exam_id` = '$exam_id' AND `exam_status` = 'appeared' ORDER BY `scored_marks` DESC) s ) q WHERE `student_id` = '$student_id' ");
		$this->db->close();
		$this->load->view('exam_result', $data);
	}

	function show_exam($exam_id = 0){
		$data = array();
		$data['pagetitle'] = 'My Exams : AMIT College';
		$data['mainmenu'] = 'my_exams';
		$data['currentsubmenu'] = 'my_exams';
		$data['examdata'] = $this->Common_Model->FetchData("erp_exams AS ex LEFT JOIN erp_departments AS d ON ex.exam_department_id = d.department_id LEFT JOIN erp_stream AS s ON ex.exam_stream_id = s.stream_id LEFT JOIN erp_subjects AS sb ON ex.exam_subject_id = sb.subject_id LEFT JOIN erp_exams_question AS q ON ex.exam_id = q.exam_id", "ex.exam_id, ex.exam_title, ex.exam_instruction, ex.exam_duration, ex.exam_positive_mark, ex.exam_negative_mark, ex.exam_answer_type, ex.created_by, ex.created_on, ex.exam_status, COUNT(q.question_id) AS noofques, d.department_name, s.stream_name, sb.subject_name", "ex.exam_id = '$exam_id' AND ex.exam_department_id = '".$this->session->userdata("department_id")."' AND ex.exam_status = 'Published' ORDER BY ex.exam_id DESC");
		$this->db->close();
		$this->load->view('show_exam', $data);
	}

	function run_exam($exam_id = 0){
		if($exam_id == 0 || $exam_id == ''){
			redirect("dashboard/my_exams");
		}
		$data = array();
		$data['pagetitle'] = 'My Exams : AMIT College';
		$data['mainmenu'] = 'my_exams';
		$data['currentsubmenu'] = 'my_exams';
		$data['examdata'] = $examdata =  $this->Common_Model->FetchData("erp_exams AS ex LEFT JOIN erp_departments AS d ON ex.exam_department_id = d.department_id LEFT JOIN erp_stream AS s ON ex.exam_stream_id = s.stream_id LEFT JOIN erp_subjects AS sb ON ex.exam_subject_id = sb.subject_id LEFT JOIN erp_exams_question AS q ON ex.exam_id = q.exam_id", "ex.exam_id, ex.exam_title, ex.exam_instruction, ex.exam_duration, ex.exam_positive_mark, ex.exam_negative_mark, ex.exam_answer_type, ex.created_by, ex.created_on, ex.exam_status, COUNT(q.question_id) AS noofques,  d.department_name, s.stream_name, sb.subject_name", "ex.exam_id = '$exam_id' AND ex.exam_department_id = '".$this->session->userdata("department_id")."' AND ex.exam_status = 'Published' ORDER BY ex.exam_id DESC");
		$data['examDuration'] = $examDuration = (int)$examdata[0]['exam_duration']*60;

		$data['pending'] = 0;
		$chk = $this->Common_Model->FetchData("erp_exams_result","*","exam_id = '".$examdata[0]['exam_id']."' AND student_id = '".$this->session->userdata("student_id")."' AND exam_status = 'pending'");
		$chk1 = $this->Common_Model->FetchData("erp_exams_result","*","exam_id = '".$examdata[0]['exam_id']."' AND student_id = '".$this->session->userdata("student_id")."' AND exam_status = 'appeared'");
		if($chk){
			$data['examresdata'] = $examresdata = $this->Common_Model->FetchData("erp_exams_result","*", "exam_id = '".$examdata[0]['exam_id']."' AND student_id = '".$this->session->userdata("student_id")."'");
			$data['examDuration'] = $examDuration = $examDuration - (int)$examresdata[0]['exam_time_taken'];
			$data['pending'] = $pending = 1;
			$quesarr = array();
			$qr = $this->Common_Model->FetchData("erp_exams_evaluation", "*", "exam_id = '".$examdata[0]['exam_id']."' AND student_id = '".$this->session->userdata("student_id")."'");
			if($qr){
                $j=1;
                for($i=0;$i<count($qr);$i++){
					array_push($quesarr, $qr[0]['question_id']);
				}
			}
			$data['quesarr'] = $quesarr;
		}elseif($chk1){
			redirect("dashboard/re-exam/".$examdata[0]['exam_id']);
		}else{
			$this->Common_Model->db_query("INSERT INTO erp_exams_result SET exam_id = '".$examdata[0]['exam_id']."', started_on = '".date("Y-m-d H:i:s")."', student_id = '".$this->session->userdata("student_id")."', exam_time_taken = 0, exam_status = 'pending'");
		}
		
		$data['questions'] = $this->Common_Model->FetchData("erp_exams_question AS ex LEFT JOIN erp_questions AS q ON ex.question_id = q.q_id", "*", "ex.exam_id = '$exam_id'");
		$this->db->close();
		$this->load->view('run_exam', $data);
	}
}
