<?php
session_start();
include('sessioncheck.php');
require_once("controller/clsCrud.php");
require_once("controller/clsCommon.php");
$action = $_REQUEST['act'];
$location = "manage-banner.php";
$crud = new Crud();
switch($action){		
	case "addbanner":{	
		$banner_desc = $crud->escape_string($_REQUEST['banner_desc']);
		$banner_img = $_FILES['banner_img']['name'];
		$banner_tmp = $_FILES['banner_img']['tmp_name'];
		$expld      = explode('.',$banner_img);
		//print_r($expld);exit;
		$modifiedFile = 'Banner_'.time().'.'.end($expld);
		$modified_date = date("Y-m-d");
		if(move_uploaded_file($banner_tmp,'../banner/'.$modifiedFile)){
			$sql = "INSERT into tbl_banner SET banner_desc = '$banner_desc', banner_img = '$modifiedFile', modified_date = '$modified_date', status = 1";
			$res = $crud->execute($sql);
			if($res){
				$msg="New Banner Added Successfully.";
				setMessage($msg, "alert alert-success");
				header("location:".$location);exit;			
			}else{
				$msg="Sorry something went wrong.";
				setMessage($msg, "alert alert-danger");
				header("location:".$location);exit;	
			}
		}
	}break;
	
	
	case "updbanner":{
		$bannerId    = $crud->escape_string($_REQUEST['bannerId']);		
		$banner_desc = $crud->escape_string($_REQUEST['banner_desc']);
		$modifiedFile= $crud->escape_string($_REQUEST['hdnimage']);
		
		if($_FILES['banner_img']['name'] != ''){
			unlink('../banner/'.$modifiedFile);
			$banner_img = $_FILES['banner_img']['name'];
			$banner_tmp = $_FILES['banner_img']['tmp_name'];
			$expld      = explode('.',$banner_img);
			//print_r($expld);exit;
			$modifiedFile = 'Banner_'.time().'.'.end($expld);
			move_uploaded_file($banner_tmp,'../banner/'.$modifiedFile);
		}
		$modified_date = date("Y-m-d");
		if($bannerId > 0){
			$sql = "UPDATE tbl_banner SET banner_desc = '$banner_desc', banner_img = '$modifiedFile', modified_date = '$modified_date' WHERE id = '$bannerId'";
			$res = $crud->execute($sql);
			if($res){
				$msg="Banner Updated Successfully.";
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
		$respond = $crud->delete($id,"tbl_banner","id");
		if($respond){
			unlink('../banner/'.$img);
			setMessage("Record Deleted Successfully.","alert alert-success");
			header("location:".$location);exit;
		}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");
			header("location:".$location);exit;
		}
	}break;		
	
	case "disable":{	
		$id = $crud->escape_string($_REQUEST['id']);
		$respond = $crud->execute("UPDATE tbl_banner SET status = 0 WHERE id = '$id'");
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
		$respond = $crud->execute("UPDATE tbl_banner SET status = 1 WHERE id = '$id'");
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