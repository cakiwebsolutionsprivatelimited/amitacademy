<?php
session_start();
include('sessioncheck.php');
require_once("controller/clsCrud.php");
require_once("controller/clsCommon.php");
$action = $_REQUEST['act'];
$location = "manage-user.php";
$crud = new Crud();
switch($action){		
	case "adduser":{	
		$uname = $crud->escape_string($_REQUEST['uname']);
		$branch  = $crud->escape_string($_REQUEST['branch']);
		$sql   = "SELECT COUNT(1) as tot from tbl_admin where admin_user='$uname' OR branch = '$branch'";
		$res   = $crud->countRec($sql);
		//print_r($res);exit;
		if($res['tot']>0) {
			$msg="User Name already exist Or you cannot add multiple user to same branch.";
			setMessage($msg,'alert alert-danger');
		}
		else{
			$name  = $crud->escape_string($_REQUEST['name']);
			$uname = $crud->escape_string($_REQUEST['uname']);
			$pass  =  md5($_REQUEST['pass']);
			$email = $crud->escape_string($_REQUEST['email']);
			$phone = $crud->escape_string($_REQUEST['phone']);
			$admin_type = $crud->escape_string($_REQUEST['admin_type']);
			$addr      = $crud->escape_string($_REQUEST['addr']);
			$admin_regdate = date("d-m-Y");
			$sql = "INSERT into tbl_admin (admin_id, admin_user, admin_pass, admin_name, admin_email, admin_phone, address, admin_type, admin_status, admin_regdate, branch) VALUES (null, '$uname', '$pass', '$name', '$email', '$phone', '$addr', '$admin_type', '1', '$admin_regdate', '$branch')";
			$res = $crud->execute($sql);
			if($res){
				$msg="New User Created Successfully.";
				setMessage($msg, "alert alert-success");		
			}else{
				$msg="Sorry something went wrong.";
				setMessage($msg, "alert alert-danger");
			}
		}
	}break;
	
	
	case "updateUser":{
		$userId= $crud->escape_string($_REQUEST['userId']);		
		$name  = $crud->escape_string($_REQUEST['name']);
		$email = $crud->escape_string($_REQUEST['email']);
		$phone = $crud->escape_string($_REQUEST['phone']);
		$addr      = $crud->escape_string($_REQUEST['addr']);
		$branch  = $crud->escape_string($_REQUEST['branch']);
		$sql   = "SELECT COUNT(1) as tot from tbl_admin where branch = '$branch' AND admin_id NOT IN ($userId)";
		$res   = $crud->countRec($sql);
		//print_r($res);exit;
		if($res['tot']>0) {
			$msg="You cannot add multiple user to same branch";
			setMessage($msg,'alert alert-danger');
			header("location:".$location);exit;
		}
		if($userId > 1){
			$sql = "UPDATE tbl_admin SET admin_name = '$name', admin_email = '$email', admin_phone = '$phone', address = '$addr', branch = '$branch' WHERE admin_id = '$userId'";
			$res = $crud->execute($sql);
			if($res){
				$msg="User Details Updated Successfully.";
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
		if($id > 1){
			$respond = $crud->delete($id,"tbl_admin","admin_id");
			if($respond){
				setMessage("Record Deleted Successfully.","alert alert-success");
				header("location:".$location);exit;
			}else{
				setMessage("Sorry Something went wrong.","alert alert-danger");
				header("location:".$location);exit;
			}
		}else{
			setMessage("Sorry You can not delete the selected Record.","alert alert-danger");
			header("location:".$location);exit;
		}
	}break;		
	
	case "disable":{	
		$id = $crud->escape_string($_REQUEST['id']);
		if($id > 1){
			$respond = $crud->execute("UPDATE tbl_admin SET admin_status = 0 WHERE admin_id = '$id'");
			if($respond){
				setMessage("Record Locked Successfully.","alert alert-success");
				header("location:".$location);exit;
			}else{
				setMessage("Sorry Something went wrong.","alert alert-danger");
				header("location:".$location);exit;
			}
		}else{
			setMessage("Sorry You can not enable the selected Record.","alert alert-danger");
			header("location:".$location);exit;
		}
	}break;
	
	case "enable":{	
		$id = $crud->escape_string($_REQUEST['id']);
		if($id > 1){
			$respond = $crud->execute("UPDATE tbl_admin SET admin_status = 1 WHERE admin_id = '$id'");
			if($respond){
				setMessage("Record Unlock Successfully.","alert alert-success");
				header("location:".$location);exit;
			}else{
				setMessage("Sorry Something went wrong.","alert alert-danger");
				header("location:".$location);exit;
			}
		}else{
			setMessage("Sorry You can not enable the selected Record.","alert alert-danger");
			header("location:".$location);exit;
		}
	}break;
	
	
	case "updatePass":{
		$userId= $crud->escape_string($_REQUEST['userId']);		
		$pass  =  md5($_REQUEST['pass']);
		if($userId > 1){
			$sql = "UPDATE tbl_admin SET admin_pass = '$pass' WHERE admin_id = '$userId'";
			$res = $crud->execute($sql);
			if($res){
				$msg="Password Updated Successfully.";
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
	
	
	default: 
		header("location:".$location);
	break; 
}
redirect ($location);exit;
?>