<?php
session_start();
include('sessioncheck.php');
require_once("controller/clsCrud.php");
require_once("controller/clsCommon.php");
$action = $_REQUEST['act'];
$location = "manage-pages.php";
$crud = new Crud();
switch($action){		
	case "addpage":{	
		$page_name = $crud->escape_string($_REQUEST['page_name']);
		$page_title = $crud->escape_string($_REQUEST['page_title']);
		$page_meta_desc = $crud->escape_string($_REQUEST['page_meta_desc']);
		$page_meta_key = $crud->escape_string($_REQUEST['page_meta_key']);
		$page_type     = $crud->escape_string($_REQUEST['page_type']);
		$description   = '';
		$modifiedFile  = '';
		$link          = '';
		$plugin_id     = 0 ;
		if($page_type == 1){
			$description = htmlentities($_REQUEST['description']);
		}else if($page_type == 2){
			if($_FILES['file']['name'] != ''){
				$downlfile = $_FILES['file']['name'];
				$download_tmp  = $_FILES['file']['tmp_name'];
				$expld    = explode('.',$downlfile);
				//print_r($expld);exit;
				$modifiedFile = 'Download_'.time().'.'.end($expld);
				move_uploaded_file($download_tmp,'../pages/'.$modifiedFile);
			}
		}else if($page_type == 3){
			$link = $crud->escape_string($_REQUEST['link']);
		}else if($page_type == 4){
			$plugin_id     = $crud->escape_string($_REQUEST['plugin_id']);
		}
		
		
		$entry_date = date("Y-m-d");
		
		
		$sql = "INSERT into tbl_pages SET page_name = '$page_name', page_title = '$page_title', page_meta_desc = '$page_meta_desc', page_meta_key = '$page_meta_key', page_type = '$page_type', plugin_id = '$plugin_id', link = '$link', file = '$modifiedFile', description = '$description', entry_date = '$entry_date', modified_date = '$entry_date', status = 1";
		$res = $crud->execute($sql);
		if($res){
			$msg="New Page Added Successfully.";
			setMessage($msg, "alert alert-success");
			header("location:".$location);exit;			
		}else{
			$msg="Sorry something went wrong.";
			setMessage($msg, "alert alert-danger");
			header("location:".$location);exit;	
		}
	}break;
	
	
	case "updpage":{
		$pageId    = $crud->escape_string($_REQUEST['pageId']);		
		$page_name = $crud->escape_string($_REQUEST['page_name']);
		$page_title = $crud->escape_string($_REQUEST['page_title']);
		$page_meta_desc = $crud->escape_string($_REQUEST['page_meta_desc']);
		$page_meta_key = $crud->escape_string($_REQUEST['page_meta_key']);
		$page_type     = $crud->escape_string($_REQUEST['page_type']);
		$description   = '';
		$modifiedFile  = '';
		$link          = '';
		$plugin_id     = 0;
		if($page_type == 1){
			$description = htmlentities($_REQUEST['description']);
		}else if($page_type == 2){
			$modifiedFile = $crud->escape_string($_REQUEST['hdnfile']);
			if($_FILES['file']['name'] != ''){
				$downlfile = $_FILES['file']['name'];
				$download_tmp  = $_FILES['file']['tmp_name'];
				$expld    = explode('.',$downlfile);
				//print_r($expld);exit;
				$modifiedFile = 'Download_'.time().'.'.end($expld);
				move_uploaded_file($download_tmp,'../pages/'.$modifiedFile);
			}
		}else if($page_type == 3){
			$link = $crud->escape_string($_REQUEST['link']);
		}else if($page_type == 4){
			$plugin_id     = $crud->escape_string($_REQUEST['plugin_id']);
		}
		
		
		$entry_date = date("Y-m-d");
		if($pageId > 0){
			$sql = "UPDATE tbl_pages SET page_name = '$page_name', page_title = '$page_title', page_meta_desc = '$page_meta_desc', page_meta_key = '$page_meta_key', page_type = '$page_type', plugin_id = '$plugin_id', link = '$link', file = '$modifiedFile', description = '$description', modified_date = '$entry_date' WHERE id = '$pageId'";
			$res = $crud->execute($sql);
			if($res){
				$msg="Page Updated Successfully.";
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
	
	
	case "tbl_pages":{		
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
	
	case "deletedta":{		
		$id = $crud->escape_string($_REQUEST['id']);
		$respond = $crud->delete($id,"tbl_pages","id");
		if($respond){
			setMessage("Record Deleted Successfully.","alert alert-success");
			header("location:".$location);exit;
		}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");
			header("location:".$location);exit;
		}
	}break;
	
	case "disable":{	
		$id = $crud->escape_string($_REQUEST['id']);
		$respond = $crud->execute("UPDATE tbl_pages SET status = 0 WHERE id = '$id'");
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
		$respond = $crud->execute("UPDATE tbl_pages SET status = 1 WHERE id = '$id'");
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