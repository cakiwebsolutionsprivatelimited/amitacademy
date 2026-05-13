<?php
function getMessage() {
	if(isset($_SESSION[SES]['frontmsg'])) {
		echo $_SESSION[SES]['frontmsg'];
		unset($_SESSION[SES]['frontmsg']);
	}			
}
function setMessage($msg,$type) {
	$_SESSION[SES]['frontmsg'] = '<div class="'.$type.'">'.$msg.'</div>';
}

function cleanHex($input){
//echo $input;
	$clean = preg_replace("![\][xX]([A-Fa-f0-9]{1,3})!", "",$input);
	//echo $clean;
	return $clean;
}
function cleanInput($input) {
	return inText(cleanHex($input));
}
function formatDate($date) {
	$pieces = explode("-",$date);
	$dt = date("d/m/Y",strtotime($pieces[0].$pieces[1].$pieces[2]));
	return $dt;
}
function redirect($page="") {
	if($page=="") return false;
	else @header("Location: ".$page);
}
function inText($str) {
	$str = addslashes(strip_tags($str));
	return $str;
}
function inHTML($str) {
	$str = addslashes($str);
	return $str;
}
function outText($str) {
	$str = stripslashes($str);
	return $str;
}

?>