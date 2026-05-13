<?php
session_start();
include('sessioncheck.php');
require_once("controller/clsCrud.php");
require_once("controller/clsCommon.php");
$action = $_REQUEST['act'];
$location = "manage-result.php";
$crud = new Crud();
switch($action){		
	case "addresult":{	
		$ltitle = $crud->escape_string($_REQUEST['ltitle']);
		$ntype        = $crud->escape_string($_REQUEST['ntype']);
		$modifiedFile = '';
		$description  = '';
		$not_link     = '';
		if($ntype == 1){
			$description = $crud->escape_string($_REQUEST['description']);
		}else if($ntype == 2){
			$not_file = $_FILES['not_file']['name'];
			$not_tmp  = $_FILES['not_file']['tmp_name'];
			$expld    = explode('.',$not_file);
			//print_r($expld);exit;
			$modifiedFile = 'Notif_'.time().'.'.end($expld);
			move_uploaded_file($not_tmp,'../notification/'.$modifiedFile);
		}else if($ntype == 3){
			$not_link = $crud->escape_string($_REQUEST['not_link']);
		}
		$entry_date = date("Y-m-d",strtotime($_REQUEST['entry_date']));
		//$expiredate = date("Y-m-d",strtotime($_REQUEST['expiredate']));
	    $sql = "INSERT into tbl_result SET title = '$ltitle', type = '$ntype', file = '$modifiedFile', link = '$not_link', entry_date = '$entry_date', status=1";
		$res = $crud->execute($sql);
		if($res){
			$msg="New Result Added Successfully.";
			setMessage($msg, "alert alert-success");
			header("location:".$location);exit;			
		}else{
			$msg="Sorry something went wrong.";
			setMessage($msg, "alert alert-danger");
			header("location:".$location);exit;	
		}
	}break;
	
	
	case "updresult":{
		$notifId      = $crud->escape_string($_REQUEST['notifId']);
		$ltitle = $crud->escape_string($_REQUEST['ltitle']);
		$ntype        = $crud->escape_string($_REQUEST['ntype']);
		$description  = '';
		$not_link     = '';
		$modifiedFile = $crud->escape_string($_REQUEST['hdnnotif']);
		if($ntype == 1){
			if($modifiedFile != ''){
				unlink('../notification/'.$modifiedFile);
			}
			$modifiedFile = '';
			$description = $crud->escape_string($_REQUEST['description']);
		}else if($ntype == 2){
			if($_FILES['not_file']['name'] != ''){
				unlink('../notification/'.$modifiedFile);
				$not_file = $_FILES['not_file']['name'];
				$not_tmp  = $_FILES['not_file']['tmp_name'];
				$expld    = explode('.',$not_file);
				//print_r($expld);exit;
				$modifiedFile = 'Notif_'.time().'.'.end($expld);
				move_uploaded_file($not_tmp,'../notification/'.$modifiedFile);
			}
		}else if($ntype == 3){
			if($modifiedFile != ''){
				unlink('../notification/'.$modifiedFile);
			}
			$modifiedFile = '';
			$not_link = $crud->escape_string($_REQUEST['not_link']);
		}
		$entry_date = date("Y-m-d",strtotime($_REQUEST['entry_date']));
		$expiredate = date("Y-m-d",strtotime($_REQUEST['expiredate']));
		
		if($notifId > 0){
			$sql = "UPDATE tbl_result SET title = '$ltitle', type = '$ntype', file = '$modifiedFile', link = '$not_link', entry_date = '$entry_date' WHERE id = '$notifId'";
			$res = $crud->execute($sql);
			if($res){
				$msg="Result Updated Successfully.";
				setMessage($msg, "alert alert-success");	
				header("location:".$location);exit;	
			}else{
				$msg="Sorry something went wrong.";
				setMessage($msg, "alert alert-danger");
				header("location:".$location);exit;
			}
		}else{
			setMessage("Sorry You can not modify the selected Record.","alert alert-danger");
			header("location:".$location);exit;
		}
		
	}break;
	
	
	case "deletedta":{		
		$id = $crud->escape_string($_REQUEST['id']);
		$img = $crud->escape_string($_REQUEST['img']);
		$respond = $crud->delete($id,"tbl_result","id");
		if($respond){
			if($img != ''){
				unlink('../notification/'.$img);
			}
			setMessage("Record Deleted Successfully.","alert alert-success");
			header("location:".$location);exit;
		}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");
			header("location:".$location);exit;
		}
	}break;		
	
	case "disable":{	
		$id = $crud->escape_string($_REQUEST['id']);
		$respond = $crud->execute("UPDATE tbl_result SET status = 0 WHERE id = '$id'");
		if($respond){
			setMessage("Record Locked Successfully.","alert alert-success");
			header("location:".$location);exit;
		}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");
			header("location:".$location);exit;
		}
	}break;
	
	case "enable":{	
		$id = $crud->escape_string($_REQUEST['id']);
		$respond = $crud->execute("UPDATE tbl_result SET status = 1 WHERE id = '$id'");
		if($respond){
			setMessage("Record Unlock Successfully.","alert alert-success");
			header("location:".$location);exit;
		}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");
			header("location:".$location);exit;
		}
	}break;
	
	
	default: 
		header("location:".$location);
	break; 
}
redirect ($location);exit;
?>