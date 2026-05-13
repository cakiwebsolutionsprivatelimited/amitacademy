<?php
session_start();
include('sessioncheck.php');
require_once("controller/clsCrud.php");
require_once("controller/clsCommon.php");
$action = $_REQUEST['act'];
$location = "manage-gallery.php";
$scnd_location = "manage-dep-gallery.php";
$crud = new Crud();
switch($action){		
	case "addgallery":{	
		$type = $crud->escape_string($_REQUEST['gtype']);
		$img_category = $crud->escape_string($_REQUEST['img_category']);
		$embedlink = '';
		$modifiedFile = '';
		//echo '<pre>';print_r($_FILES['image']);exit;
		$entrydte = date("Y-m-d");
		if($type == 1){
			if(count($_FILES['image']) > 0){
				for($i = 0;$i < count($_FILES['image']); $i++){
					$image = $_FILES['image']['name'][$i];
					if($image != ''){
						$image_tmp = $_FILES['image']['tmp_name'][$i];
						$expld      = explode('.',$image);
						//print_r($expld);exit;
						$modifiedFile = 'Gallery_'.time().'.'.end($expld);
						move_uploaded_file($image_tmp,'../gallery/'.$modifiedFile);
						$sql = "INSERT into tbl_gallery SET type = '$type', image_category = '$img_category', image = '$modifiedFile', embedlink = '$embedlink', entrydte = '$entrydte', status = 1";
						$res = $crud->execute($sql);
					}
					
					
				}
				
			}
			
		}else if($type == 2){
			$embedlink = $crud->escape_string($_REQUEST['embedlink']);
			$sql = "INSERT into tbl_gallery SET type = '$type', image_category = '$img_category', image = '$modifiedFile', embedlink = '$embedlink', entrydte = '$entrydte', status = 1";
			$res = $crud->execute($sql);
		}
		
		
		
		if($res){
			$msg="New Gallery Added Successfully.";
			setMessage($msg, "alert alert-success");
			header("location:".$location);exit;			
		}else{
			$msg="Sorry something went wrong.";
			setMessage($msg, "alert alert-danger");
			header("location:".$location);exit;	
		}
	}break;
	
	
	case "updgallery":{
		$galleryId    = $crud->escape_string($_REQUEST['galleryId']);		
		$type = $crud->escape_string($_REQUEST['gtype']);
		$modifiedFile= $crud->escape_string($_REQUEST['hdnimage']);
		$img_category = $crud->escape_string($_REQUEST['img_category']);
		$embedlink = $crud->escape_string($_REQUEST['embedlink']);
		
		
		if($_FILES['image']['name'] != ''){
			unlink('../gallery/'.$modifiedFile);
			$banner_img = $_FILES['image']['name'];
			$banner_tmp = $_FILES['image']['tmp_name'];
			$expld      = explode('.',$banner_img);
			//print_r($expld);exit;
			$modifiedFile = 'Gallery_'.time().'.'.end($expld);
			move_uploaded_file($banner_tmp,'../gallery/'.$modifiedFile);
		}
		if($galleryId > 0){
		 $sql = "UPDATE tbl_gallery SET type = '$type', image_category = '$img_category', image = '$modifiedFile', embedlink = '$embedlink' WHERE id = '$galleryId'";
			$res = $crud->execute($sql);
			if($res){
				$msg="Gallery Updated Successfully.";
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
	
	
/*	case "deletedta":{		
		$id = $crud->escape_string($_REQUEST['id']);
		$img = $crud->escape_string($_REQUEST['img']);
		$respond = $crud->delete($id,"tbl_gallery","id");
		if($respond){
			unlink('../gallery/'.$img);
			setMessage("Record Deleted Successfully.","alert alert-success");
			header("location:".$location);exit;
		}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");
			header("location:".$location);exit;
		}
	}break;	*/	
	
	case "disable":{	
		$id = $crud->escape_string($_REQUEST['id']);
		$respond = $crud->execute("UPDATE tbl_gallery SET status = 0 WHERE id = '$id'");
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
		$respond = $crud->execute("UPDATE tbl_gallery SET status = 1 WHERE id = '$id'");
		if($respond){
			setMessage("Record Unlock Successfully.","alert alert-success");
			header("location:".$location);exit;
		}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");
			header("location:".$location);exit;
		}
	}break;
	
		case "add_depgallery":{	
		$type = $crud->escape_string($_REQUEST['gtype']);
		$img_category = $crud->escape_string($_REQUEST['img_category']);
		$category = $crud->escape_string($_REQUEST['category']);
		$embedlink = '';
		$modifiedFile = '';
		//echo '<pre>';print_r($_FILES['image']);exit;
		$entrydte = date("Y-m-d");
		if($type == 1){
			if(count($_FILES['image']) > 0){
				for($i = 0;$i < count($_FILES['image']); $i++){
					$image = $_FILES['image']['name'][$i];
					if($image != ''){
						$image_tmp = $_FILES['image']['tmp_name'][$i];
						$expld      = explode('.',$image);
						//print_r($expld);exit;
						$modifiedFile = 'Gallery_'.time().'.'.end($expld);
						move_uploaded_file($image_tmp,'../gallery/'.$modifiedFile);
						$sql = "INSERT into tbl_department_gallery SET type = '$type', image_category = '$img_category', dep_category = '$category',image = '$modifiedFile', embedlink = '$embedlink', entrydte = '$entrydte', status = 1";
						$res = $crud->execute($sql);
					}
					
					
				}
				
			}
			
		}else if($type == 2){
			$embedlink = $crud->escape_string($_REQUEST['embedlink']);
			$sql = "INSERT into tbl_department_gallery SET type = '$type', image_category = '$img_category', image = '$modifiedFile', embedlink = '$embedlink', entrydte = '$entrydte', status = 1";
			$res = $crud->execute($sql);
		}
		
		
		
		if($res){
			$msg="New Gallery Added Successfully.";
			setMessage($msg, "alert alert-success");
			header("location:".$scnd_location);exit;			
		}else{
			$msg="Sorry something went wrong.";
			setMessage($msg, "alert alert-danger");
			header("location:".$scnd_location);exit;	
		}
	}break;
	
		case "upd_depgallery":{
		$galleryId    = $crud->escape_string($_REQUEST['galleryId']);		
		$type = $crud->escape_string($_REQUEST['gtype']);
		$modifiedFile= $crud->escape_string($_REQUEST['hdnimage']);
		$img_category = $crud->escape_string($_REQUEST['img_category']);
		$category = $crud->escape_string($_REQUEST['category']);
		$embedlink = $crud->escape_string($_REQUEST['embedlink']);
		
		
		if($_FILES['image']['name'] != ''){
			unlink('../gallery/'.$modifiedFile);
			$banner_img = $_FILES['image']['name'];
			$banner_tmp = $_FILES['image']['tmp_name'];
			$expld      = explode('.',$banner_img);
			//print_r($expld);exit;
			$modifiedFile = 'Gallery_'.time().'.'.end($expld);
			move_uploaded_file($banner_tmp,'../gallery/'.$modifiedFile);
		}
		if($galleryId > 0){
		 $sql = "UPDATE tbl_department_gallery SET type = '$type', image_category = '$img_category', dep_category = '$category', image = '$modifiedFile', embedlink = '$embedlink' WHERE id = '$galleryId'";
			$res = $crud->execute($sql);
			if($res){
				$msg="Gallery Updated Successfully.";
				setMessage($msg, "alert alert-success");	
				header("location:".$scnd_location);exit;	
			}else{
				$msg="Sorry something went wrong.";
				setMessage($msg, "alert alert-danger");
				header("location:".$scnd_location);exit;
			}
		}else{
			setMessage("Sorry You can not modify the selected Record.","alert alert-danger");
			header("location:".$scnd_location);exit;
		}
		
	}break;
	
		
	case "disabledata":{	
		$id = $crud->escape_string($_REQUEST['id']);
		$respond = $crud->execute("UPDATE tbl_department_gallery SET status = 0 WHERE id = '$id'");
		if($respond){
			setMessage("Record Locked Successfully.","alert alert-success");
			header("location:".$scnd_location);exit;
		}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");
			header("location:".$scnd_location);exit;
		}
	}break;
	
	case "enabledata":{	
		$id = $crud->escape_string($_REQUEST['id']);
		$respond = $crud->execute("UPDATE tbl_department_gallery SET status = 1 WHERE id = '$id'");
		if($respond){
			setMessage("Record Unlock Successfully.","alert alert-success");
			header("location:".$scnd_location);exit;
		}else{
			setMessage("Sorry Something went wrong.","alert alert-danger");
			header("location:".$scnd_location);exit;
		}
	}break;
	
	
	default: 
		header("location:".$location);
	break; 
}
redirect ($location);exit;
?>