<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_requests extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->perPage = 10;
		//is_logged_in();
		date_default_timezone_set('Asia/Kolkata');
	}

	function get_subject_option(){
		$records = $this->Common_Model->FetchData("subjects", "*", "course_id = '".$this->input->post("course_id")."' AND subject_status = 'Active' AND delete_status = 0 ORDER BY subject_name ASC");
		$html = '<option value="">select</option>';
		if($records){
			for($i=0;$i<count($records);$i++){
				$html.= '<option value="'.$records[$i]['subject_id'].'">'.$records[$i]['subject_name'].'</option>';
			}
		}
		$this->db->close();
		echo $html;
		die(0);
	}

	function get_chapter_option(){
		$records = $this->Common_Model->FetchData("chapters", "*", "subject_id = '".$this->input->post("subject_id")."' AND chapter_status = 'Active' AND delete_status = 0 ORDER BY chapter_name ASC");
		$html = '<option value="">select</option>';
		if($records){
			for($i=0;$i<count($records);$i++){
				$html.= '<option value="'.$records[$i]['chapter_id'].'">'.$records[$i]['chapter_name'].'</option>';
			}
		}
		$this->db->close();
		echo $html;
		die(0);
	}

	function get_category_options_by_shop_id(){
		$records = $this->Common_Model->FetchData("categories", "*", "shop_id = '".$this->input->post("shop_id")."' AND category_status = 'Active' AND delete_status = 0 ORDER BY category_name ASC");
		$html = '<option value="">select</option>';
		if($records){
			for($i=0;$i<count($records);$i++){
				$html.= '<option value="'.$records[$i]['category_id'].'">'.$records[$i]['category_name'].'</option>';
			}
		}
		$this->db->close();
		echo $html;
		die(0);
	}

	function get_subcategory_options(){
		$records = $this->Common_Model->FetchData("categories_sub", "*", "category_id = '".$this->input->post("category_id")."' AND subcategory_status = 'Active' AND delete_status = 0 ORDER BY subcategory_name ASC");
		$html = '<option value="">select</option>';
		if($records){
			for($i=0;$i<count($records);$i++){
				$html.= '<option value="'.$records[$i]['subcategory_id'].'">'.$records[$i]['subcategory_name'].'</option>';
			}
		}
		$this->db->close();
		echo $html;
		die(0);
	}

	function get_item_info_by_bin(){
		$records = $this->Common_Model->FetchData("items", "*", "BIN = '".$this->input->post("bin_no")."'");
		if($records){
			$arr = array("item_present" => 1, "item_id" => $records[0]['id'], "item_stock" => $records[0]['QTY_STOCK'], "item_description" => 'Code - '.$records[0]['ITEM_CODE'].'</br>DESC - '.$records[0]['DESC'].'</br>Rate - '.$records[0]['RATE'].'</br>Stock: '.$records[0]['QTY_STOCK']);
			$this->db->close();
			echo json_encode($arr);
		}else{
			$this->db->close();
			echo json_encode(array("item_present" => 0));
		}
	}

	function updateexamtime(){
		$this->Common_Model->db_query("UPDATE erp_exams_result SET updated_on = '".date("Y-m-d H:i:s")."', exam_time_taken = '".$_POST['timetaken']."' WHERE exam_id = '".$_POST['examid']."' AND student_id = '".$this->session->userdata("student_id")."'");
		$this->db->close();
		echo 'time saved';
	}

	function saveandnext(){
		$chk = $this->Common_Model->FetchData("erp_exams_evaluation", "exam_id = '".$_POST['examid']."' AND student_id = '".$this->session->userdata("student_id")."' AND question_id = '".$_POST['questionid']."'");
		if($chk){
			$this->Common_Model->db_query("UPDATE erp_exams_evaluation SET status = 'answered', timetaken = '".$_POST['timetaken']."', question_answer = '".$_POST['answer']."' WHERE exam_id = '".$_POST['examid']."' AND student_id = '".$this->session->userdata("student_id")."' AND question_id = '".$_POST['questionid']."'");
		}else{
			$this->Common_Model->db_query("INSERT INTO erp_exams_evaluation SET status = 'answered', timetaken = '".$_POST['timetaken']."', question_answer = '".$_POST['answer']."', exam_id = '".$_POST['examid']."', student_id = '".$this->session->userdata("student_id")."', question_id = '".$_POST['questionid']."'");
		}
		$this->db->close();
		echo 'saved';
	}


	function saveandnextun(){
		if($this->Common_Model->FetchRows("erp_exams_evaluation", "exam_id = '".$_POST['examid']."' AND student_id = '".$this->session->userdata("student_id")."' AND question_id = '".$_POST['questionid']."'")){
			$this->Common_Model->db_query("UPDATE erp_exams_evaluation SET status = 'notAnswered', timetaken = '".$_POST['timetaken']."', question_answer = '' WHERE exam_id = '".$_POST['examid']."' AND student_id = '".$this->session->userdata("student_id")."' AND question_id = '".$_POST['questionid']."'");
		}else{
			$this->Common_Model->db_query("INSERT INTO erp_exams_evaluation SET status = 'notAnswered', timetaken = '".$_POST['timetaken']."', question_answer = '', exam_id = '".$_POST['examid']."', student_id = '".$this->session->userdata("student_id")."', question_id = '".$_POST['questionid']."'");
		}
		$this->db->close();
		echo 'saved';
	}

	function saveandmark(){
		if($this->Common_Model->FetchRows("erp_exams_evaluation", "exam_id = '".$_POST['examid']."' AND student_id = '".$this->session->userdata("student_id")."' AND question_id = '".$_POST['questionid']."'")){
			$this->Common_Model->db_query("UPDATE erp_exams_evaluation SET status = 'markedForRiview', timetaken = '".$_POST['timetaken']."', question_answer = '".$_POST['answer']."' WHERE exam_id = '".$_POST['examid']."' AND student_id = '".$this->session->userdata("student_id")."' AND question_id = '".$_POST['questionid']."'");
		}else{
			$this->Common_Model->db_query("INSERT INTO erp_exams_evaluation SET status = 'markedForRiview', timetaken = '".$_POST['timetaken']."', question_answer = '".$_POST['answer']."', exam_id = '".$_POST['examid']."', student_id = '".$this->session->userdata("student_id")."', question_id = '".$_POST['questionid']."'");
		}
		$this->db->close();
		echo 'saved';
	}

	function markandnext(){
		if($this->Common_Model->FetchRows("erp_exams_evaluation", "exam_id = '".$_POST['examid']."' AND student_id = '".$this->session->userdata("student_id")."' AND question_id = '".$_POST['questionid']."'")){
			$this->Common_Model->db_query("UPDATE erp_exams_evaluation SET question_answer = '', status = 'marked', timetaken = '".$_POST['timetaken']."' WHERE exam_id = '".$_POST['examid']."' AND student_id = '".$this->session->userdata("student_id")."' AND question_id = '".$_POST['questionid']."'");
		}else{
			$this->Common_Model->db_query("INSERT INTO erp_exams_evaluation SET status = 'marked', timetaken = '".$_POST['timetaken']."', exam_id = '".$_POST['examid']."', question_answer = '', student_id = '".$this->session->userdata("student_id")."', question_id = '".$_POST['questionid']."'");
		}
		$this->db->close();
		echo 'saved';
	}

	function endexam(){
		$examdata = $this->Common_Model->FetchData("erp_exams", "*","exam_id = '".$_POST['examid']."' ");

		$noofques = $this->Common_Model->FetchRows("erp_exams_question", "*", "exam_id = '".$examdata[0]['exam_id']."'");
		$right_answer=0;
		$wrong_answer=0;
		$unanswered=0;
		$correct_ques_id = '';
		$incorrect_ques_id = '';
		$unanswered_ques_id = '';
		
		$exam_positive_mark = 0;
		$exam_negative_mark = 0;
		$exam_total_mark = 0;
		$marks_secured = 0;
		$answersheet = '';
		$slno = 0;
		$i=1;

		$examresult = $this->Common_Model->FetchData("erp_exams_result", "*", "exam_id = '".$examdata[0]['exam_id']."' AND student_id = '".$this->session->userdata("student_id")."'");

		$questions = $this->Common_Model->FetchData("erp_exams_question AS ex LEFT JOIN erp_questions AS q ON ex.question_id = q.q_id", "*", "ex.exam_id = '".$examdata[0]['exam_id']."'");
		for($i=0;$i<count($questions);$i++){
			$user_answer = '';
			$mark = 0;
			$user_answer = isset($_POST[$questions[$i]['q_id']]) ? $_POST[$questions[$i]['q_id']] : '';
			if($user_answer == $questions[$i]['correct_option']){
				$exam_positive_mark = $exam_positive_mark + (float)$examdata[0]['exam_positive_mark'];
				$question_status =1;
				$right_answer++;
			}
			elseif($user_answer == ''){
				$question_status = 2;
				$unanswered++;
			}
			else{
				$exam_negative_mark = $exam_negative_mark + (float)$examdata[0]['exam_negative_mark'];
				$question_status = 0;
				$wrong_answer++;
			}
			$exam_total_mark = $exam_total_mark + (float)$examdata[0]['exam_positive_mark'];
			$timetaken = $_POST['individualtimer'.$questions[$i]['q_id']];
			$this->Common_Model->db_query("UPDATE erp_exams_evaluation SET question_status = $question_status, timetaken = '$timetaken', question_answer = '$user_answer', marks = '$mark' WHERE exam_id='".$examdata[0]['exam_id']."' AND question_id = '".$questions[$i]['q_id']."' AND student_id = '".$this->session->userdata("student_id")."'");
			
		}
		$exam_total_mark = round($exam_total_mark,2);
		$exam_negative_mark = round($exam_negative_mark,2);
		$marks_secured = $exam_positive_mark - $exam_negative_mark;
		$marks_secured = round($marks_secured,2);
		$percentage = $marks_secured/$exam_total_mark*100;
		$percentage = round($percentage, 2);
		$chk = $this->Common_Model->FetchData("erp_exams_evaluation","*", "exam_id='".$examdata[0]['exam_id']."' AND student_id = '".$this->session->userdata("student_id")."' AND question_status = 0");
		if($chk){
			for($i=0;$i<count($chk);$i++){
				$incorrect_ques_id.= ($incorrect_ques_id == '')? $chk[$i]['question_id'] : ','.$chk[$i]['question_id'];
			}
		}
		$chk = $this->Common_Model->FetchData("erp_exams_evaluation","*", "exam_id='".$examdata[0]['exam_id']."' AND student_id = '".$this->session->userdata("student_id")."' AND question_status = 1");
		if($chk){
			for($i=0;$i<count($chk);$i++){

				$correct_ques_id.= ($correct_ques_id == '')? $chk[$i]['question_id'] : ','.$chk[$i]['question_id'];
			}
		}
		$chk = $this->Common_Model->FetchData("erp_exams_evaluation","*", "exam_id='".$examdata[0]['exam_id']."' AND student_id = '".$this->session->userdata("student_id")."' AND question_status = 2");
		if($chk){
			for($i=0;$i<count($chk);$i++){
				$unanswered_ques_id.= ($unanswered_ques_id == '')? $chk[$i]['question_id'] : ','.$chk[$i]['question_id'];
			}
		}

		$this->Common_Model->db_query("UPDATE erp_exams_result SET `correct_ques` = '$correct_ques_id', `correct_no` = '$right_answer', `incorrect_ques` = '$incorrect_ques_id', `incorrect_no` = '$wrong_answer', `unattempted_ques` = '$unanswered_ques_id', `unattempted_no` = '$unanswered', `total_marks` = '$exam_total_mark', `scored_marks` = '$marks_secured', `scored_percentage` = '$percentage', `exam_status` = 'appeared' WHERE exam_id = '".$examdata[0]['exam_id']."' AND student_id = '".$this->session->userdata("student_id")."'");
		$this->db->close();
		echo 'success';exit;
	}
}