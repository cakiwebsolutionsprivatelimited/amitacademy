<?php
//if($_SESSION['admin_id']== '' && $_SESSION['admin_user'] == '' && $_SESSION['admin_name'] == '' && $_SESSION['admin_email'] == ''){
if( empty($_SESSION['user']) && count($_SESSION['user'])==0 ) {
	header('location:login.php');exit;
}
include('config.php');
$adminPages = array('dashboard.php','manage-banner.php','BannerAction.php','manage-notification.php','NotificationAction.php','manage-news.php','NewsAction.php','manage-gallery.php','GalleryAction.php','manage-pages.php','PageAction.php','manage-menu.php','MenuAction.php','manage-category.php','categoryAction.php','manage-dep-category.php','depcategoryAction.php','manage-dep-gallery.php','depgalleryAction.php','manage-result.php','ResultAction.php','enquiry.php','show-enquiryData.php');

$branchPages = array('dashboard.php','manage-student.php','StudentAction.php','manage-admission.php','AdmissionAction.php','manage-accessories-sale.php','SaleAction.php','manage-re-admission.php','ReadmissionAction.php');

$studentPages = array('dashboard.php','student-manager.php','student-accessories.php');


$getCurpage = basename($_SERVER['PHP_SELF']);
//echo '<pre>';print_r($_SESSION['user']['admin_type']);exit;
if($_SESSION['user']['admin_type'] == 1 && !in_array($getCurpage,$adminPages)){
	echo '<script>window.location="dashboard.php";</script>';exit;
}


if($_SESSION['user']['admin_type'] == 2 && !in_array($getCurpage,$branchPages)){
	echo '<script>window.location="dashboard.php";</script>';exit;
}

if($_SESSION['user']['admin_type'] == 3 && !in_array($getCurpage,$studentPages)){
	echo '<script>window.location="dashboard.php";</script>';exit;
}
?>