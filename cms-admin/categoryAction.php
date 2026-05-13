<?php
session_start();
include('sessioncheck.php');
require_once("controller/clsCrud.php");
require_once("controller/clsCommon.php");
$action = $_REQUEST['act'];
$location = "manage-category.php";
$scnd_location = "manage-gallery.php";
$third_location = "manage-dep-category.php";
//$fourth_location = "manage-department-gallery.php";
$crud = new Crud();

switch($action){		
	case "addcategory":{	
		$title = $crud->escape_string($_REQUEST['title']);
		$desc = $crud->escape_string($_REQUEST['desc']);
		//$cat_img = $crud->escape_string($_REQUEST['cat_img']);
		
		$modifiedFile = '';
	
			$image = $_FILES['image']['name'];
			$image_tmp = $_FILES['image']['tmp_name'];
			$expld      = explode('.',$image);
			//print_r($expld);exit;
			$modifiedFile = 'Gallery_'.time().'.'.end($expld);
			move_uploaded_file($image_tmp,'../gallery/'.$modifiedFile);
	
		
		$entrydte = date("Y-m-d");
		$sql = "INSERT into tbl_category SET title = '$title', description = '$desc', image = '$modifiedFile', entrydte = '$entrydte', status = 1";
		$res = $crud->execute($sql);
		if($res){
			$msg="New Category Added Successfully.";
			setMessage($msg, "alert alert-success");
			header("location:".$scnd_location);exit;			
		}else{
			$msg="Sorry something went wrong.";
			setMessage($msg, "alert alert-danger");
			header("location:".$scnd_location);exit;	
		}
	}break;
	
	
	case "updcategory":{
		$categoryId    = $crud->escape_string($_REQUEST['categoryId']);		
		$title = $crud->escape_string($_REQUEST['title']);
		$desc = $crud->escape_string($_REQUEST['desc']);
		$modifiedFile= $crud->escape_string($_REQUEST['hdnimage']);
		//$embedlink = '';
		
		if($_FILES['image']['name'] != ''){
			unlink('../gallery/'.$modifiedFile);
			$banner_img = $_FILES['image']['name'];
			$banner_tmp = $_FILES['image']['tmp_name'];
			$expld      = explode('.',$banner_img);
			//print_r($expld);exit;
			$modifiedFile = 'Gallery_'.time().'.'.end($expld);
			move_uploaded_file($banner_tmp,'../gallery/'.$modifiedFile);
		}
		if($categoryId > 0){
		 $sql = "UPDATE tbl_category SET title = '$title', description = '$desc', image = '$modifiedFile' WHERE id = '$categoryId'";
			$res = $crud->execute($sql);
			if($res){
				$msg="Category Updated Successfully.";
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
		$respond = $crud->delete($id,"tbl_category","id");
		if($respond){
			unlink('../gallery/'.$img);
			setMessage("Record Deleted Successfully.","alert alert-success");
			header("location:".$location);exit;
		}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");
			header("location:".$location);exit;
		}
	}break;		
	
	case "disable":{	
		$id = $crud->escape_string($_REQUEST['id']);
		$respond = $crud->execute("UPDATE tbl_category SET status = 0 WHERE id = '$id'");
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
		$respond = $crud->execute("UPDATE tbl_category SET status = 1 WHERE id = '$id'");
		if($respond){
			setMessage("Record Unlock Successfully.","alert alert-success");
			header("location:".$location);exit;
		}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");
			header("location:".$location);exit;
		}
	}break;
	
		case "add_depcategory":{	
		$category = $crud->escape_string($_REQUEST['category']);
		$title = $crud->escape_string($_REQUEST['title']);
		$desc = $crud->escape_string($_REQUEST['desc']);
		//$cat_img = $crud->escape_string($_REQUEST['cat_img']);
		
		$modifiedFile = '';
	
			$image = $_FILES['image']['name'];
			$image_tmp = $_FILES['image']['tmp_name'];
			$expld      = explode('.',$image);
			//print_r($expld);exit;
			$modifiedFile = 'Gallery_'.time().'.'.end($expld);
			move_uploaded_file($image_tmp,'../gallery/'.$modifiedFile);
	
		
		$entrydte = date("Y-m-d");
		$sql = "INSERT into tbl_department_category SET dep_category = '$category', title = '$title', description = '$desc', image = '$modifiedFile', entry_date = '$entrydte', status = 1";
		$res = $crud->execute($sql);
		if($res){
			$msg="New Category Added Successfully.";
			setMessage($msg, "alert alert-success");
			header("location:".$third_location);exit;			
		}else{
			$msg="Sorry something went wrong.";
			setMessage($msg, "alert alert-danger");
			header("location:".$third_location);exit;	
		}
	}break;
	
		case "upd_depcategory":{
		$category = $crud->escape_string($_REQUEST['category']);
		$categoryId    = $crud->escape_string($_REQUEST['categoryId']);		
		$title = $crud->escape_string($_REQUEST['title']);
		$desc = $crud->escape_string($_REQUEST['desc']);
		$modifiedFile= $crud->escape_string($_REQUEST['hdnimage']);
		//$embedlink = '';
		
		if($_FILES['image']['name'] != ''){
			unlink('../gallery/'.$modifiedFile);
			$banner_img = $_FILES['image']['name'];
			$banner_tmp = $_FILES['image']['tmp_name'];
			$expld      = explode('.',$banner_img);
			//print_r($expld);exit;
			$modifiedFile = 'Gallery_'.time().'.'.end($expld);
			move_uploaded_file($banner_tmp,'../gallery/'.$modifiedFile);
		}
		if($categoryId > 0){
		 $sql = "UPDATE tbl_department_category SET dep_category = '$category', title = '$title', description = '$desc', image = '$modifiedFile' WHERE id = '$categoryId'";
			$res = $crud->execute($sql);
			if($res){
				$msg="Category Updated Successfully.";
				setMessage($msg, "alert alert-success");	
				header("location:".$third_location);exit;	
			}else{
				$msg="Sorry something went wrong.";
				setMessage($msg, "alert alert-danger");
				header("location:".$third_location);exit;
			}
		}else{
			setMessage("Sorry You can not modify the selected Record.","alert alert-danger");
			header("location:".$location);exit;
		}
		
	}break;
	
	
		case "deletedata":{		
		$id = $crud->escape_string($_REQUEST['id']);
		$img = $crud->escape_string($_REQUEST['img']);
		$respond = $crud->delete($id,"tbl_department_category","id");
		if($respond){
			unlink('../gallery/'.$img);
			setMessage("Record Deleted Successfully.","alert alert-success");
			header("location:".$third_location);exit;
		}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");
			header("location:".$third_location);exit;
		}
	}break;		
	
	case "disabledta":{	
		$id = $crud->escape_string($_REQUEST['id']);
		$respond = $crud->execute("UPDATE tbl_department_category SET status = 0 WHERE id = '$id'");
		if($respond){
			setMessage("Record Locked Successfully.","alert alert-success");
			header("location:".$third_location);exit;
		}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");
			header("location:".$third_location);exit;
		}
	}break;
	
	case "enabledta":{	
		$id = $crud->escape_string($_REQUEST['id']);
		$respond = $crud->execute("UPDATE tbl_department_category SET status = 1 WHERE id = '$id'");
		if($respond){
			setMessage("Record Unlock Successfully.","alert alert-success");
			header("location:".$third_location);exit;
		}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");
			header("location:".$third_location);exit;
		}
	}break;
	
	
	default: 
		header("location:".$location);
	break; 
}
redirect ($location);exit;
?>