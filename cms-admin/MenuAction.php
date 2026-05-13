<?php
session_start();
include('sessioncheck.php');
require_once("controller/clsCrud.php");
require_once("controller/clsCommon.php");
$action = $_REQUEST['act'];
$location = "manage-menu.php";
$crud = new Crud();
switch($action){		
	case "addmenu":{	
		$menu = $crud->escape_string($_REQUEST['menu']);
		$parent = $crud->escape_string($_REQUEST['parent']);
		$menu_type = $crud->escape_string($_REQUEST['menu_type']);
		$chkDup   = "SELECT COUNT(1) as tot from tbl_menu where menu='$menu' AND menu_type = '$menu_type'";
		$ress   = $crud->countRec($chkDup);
		if($ress['tot'] > 0){
			die('Sorry menu already in the menu list of the selected location.');
		}
		$sql = "INSERT into tbl_menu SET menu = '$menu', parent = '$parent', menu_type = '$menu_type', status = 1";
		$res = $crud->execute($sql);
		if($res){
			$msg="New Menu Added Successfully.";
			setMessage($msg, "alert alert-success");
			header("location:".$location);exit;			
		}else{
			$msg="Sorry something went wrong.";
			setMessage($msg, "alert alert-danger");
			header("location:".$location);exit;	
		}
	}break;
	
	
	case "updmenu":{
		$menuId= $crud->escape_string($_REQUEST['menuId']);		
		$menu = $crud->escape_string($_REQUEST['menu']);
		$parent = $crud->escape_string($_REQUEST['parent']);
		$menu_type = $crud->escape_string($_REQUEST['menu_type']);
		$sql   = "SELECT COUNT(1) as tot from tbl_menu where menu='$menu' AND menu_type = '$menu_type' AND id NOT IN($menuId)";
		$res   = $crud->countRec($sql);
		//print_r($res);exit;
		if($res['tot']>0) {
			$msg="Sorry menu already in the menu list of the selected location.";
			setMessage($msg,'alert alert-danger');
			header("location:".$location);exit;
		}
		if($menuId > 0){
			$sql = "UPDATE tbl_menu SET menu = '$menu', parent = '$parent', menu_type = '$menu_type' WHERE id = '$menuId'";
			$res = $crud->execute($sql);
			if($res){
				$msg="Menu Updated Successfully.";
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
		$respond = $crud->delete($id,"tbl_menu","id");
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
		$respond = $crud->execute("UPDATE tbl_menu SET status = 0 WHERE id = '$id'");
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
		$respond = $crud->execute("UPDATE tbl_menu SET status = 1 WHERE id = '$id'");
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