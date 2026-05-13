<?php
session_start();
include('sessioncheck.php');
require_once("controller/clsCrud.php");
require_once("controller/clsCommon.php");
$action = $_REQUEST['act'];
$location = "manage-news.php";
$crud = new Crud();
switch($action){		
	case "addnews":{	
		$news_title = $crud->escape_string($_REQUEST['news_title']);
		$publishedon= (strtotime($_REQUEST['publishedon']) > 0)?$_REQUEST['publishedon']:'0000-00-00';
		if($_FILES['image']['name'] != ''){
			$not_file = $_FILES['image']['name'];
			$not_tmp  = $_FILES['image']['tmp_name'];
			$expld    = explode('.',$not_file);
			//print_r($expld);exit;
			$modifiedFile = 'News_'.time().'.'.end($expld);
			move_uploaded_file($not_tmp,'../news/'.$modifiedFile);
		}
		$description = $crud->escape_string($_REQUEST['description']);
		$entry_date = date("Y-m-d");
		
		
		$sql = "INSERT into tbl_news SET news_title = '$news_title', publishedon = '$publishedon', image = '$modifiedFile', description = '$description', entry_date = '$entry_date', status = 1";
		$res = $crud->execute($sql);
		if($res){
			$msg="New News Added Successfully.";
			setMessage($msg, "alert alert-success");
			header("location:".$location);exit;			
		}else{
			$msg="Sorry something went wrong.";
			setMessage($msg, "alert alert-danger");
			header("location:".$location);exit;	
		}
	}break;
	
	
	case "updnews":{
		$newsId    = $crud->escape_string($_REQUEST['newsId']);		
		$news_title = $crud->escape_string($_REQUEST['news_title']);
		$publishedon= (strtotime($_REQUEST['publishedon']) > 0)?$_REQUEST['publishedon']:'0000-00-00';
		$modifiedFile = $crud->escape_string($_REQUEST['hdnimg']);
		if($_FILES['image']['name'] != ''){
			unlink('../news/'.$modifiedFile);
			$not_file = $_FILES['image']['name'];
			$not_tmp  = $_FILES['image']['tmp_name'];
			$expld    = explode('.',$not_file);
			//print_r($expld);exit;
			$modifiedFile = 'News_'.time().'.'.end($expld);
			move_uploaded_file($not_tmp,'../news/'.$modifiedFile);
		}
		$description = $crud->escape_string($_REQUEST['description']);
		if($newsId > 0){
			$sql = "UPDATE tbl_news SET news_title = '$news_title', publishedon = '$publishedon', image = '$modifiedFile', description = '$description', entry_date = '$entry_date' WHERE id = '$newsId'";
			$res = $crud->execute($sql);
			if($res){
				$msg="News Updated Successfully.";
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
		$respond = $crud->delete($id,"tbl_news","id");
		if($respond){
			if($img != ''){
				unlink('../news/'.$img);
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
		$respond = $crud->execute("UPDATE tbl_news SET status = 0 WHERE id = '$id'");
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
		$respond = $crud->execute("UPDATE tbl_news SET status = 1 WHERE id = '$id'");
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