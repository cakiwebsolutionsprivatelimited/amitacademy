<?php

require_once("controller/clsCrud.php");
$crud = new Crud();
if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'login'){
	if($_SESSION['code'] != $_REQUEST['capcode']){
	?>
		<script>
            alert('sorry wrong captcha code');
            window.location = "login.php";
        </script>
    <?php
    exit;
	}
	$uname     = $crud->escape_string($_POST['uname']);
	$logintype = $crud->escape_string($_POST['logintype']);
    $password  = md5($_POST['password']);
	if($logintype == 1){
		$query = "SELECT * FROM tbl_admin WHERE admin_user = '$uname' AND admin_pass = '$password' AND admin_status = 1";
	}else if($logintype == 2){
		$query = "SELECT * FROM tbl_student WHERE uname = '$uname' AND password = '$password' AND status = 1";
	}else{
	?>
		<script>
            window.location = "login.php";
        </script>
    <?php
    exit;
	}
	$result = $crud->getData($query);
	//echo '<pre>';print_r($result);exit;
	if(!empty($result)){
		$dates = date('Y');
		if (date('m') <= 4) {//Upto April
			$year = ($dates-1) . '-' . $dates;
		} else {//After April
			$year = $dates . '-' . ($dates + 1);
		}
			
		$_SESSION['curSession'] = $year;
		$_SESSION['user'] = $result[0];
		header('location:dashboard.php');exit;
	}else{
		echo '<script>alert("Sorry Invalid Credential.");window.location="login.php"</script>';exit;
	}
	//print_r($result);exit;
}
?>