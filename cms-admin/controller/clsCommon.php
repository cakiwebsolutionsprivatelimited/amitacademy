<?php
function getMessage() {
	if(isset($_SESSION['adminmsg'])) {
		echo $_SESSION['adminmsg'];
		unset($_SESSION['adminmsg']);
	}			
}
function setMessage($msg,$type='alert alert-danger') {
	$_SESSION['adminmsg'] = '<div class="'.$type.'">'.$msg.'</div>';
}

function redirect($page="") {
	if($page=="") return false;
	else @header("Location: ".$page);
}

function dateDiffInDays($date1, $date2)  
{ 
    // Calulating the difference in timestamps 
    $diff = strtotime($date2) - strtotime($date1); 
      
    // 1 day = 24 hours 
    // 24 * 60 * 60 = 86400 seconds 
    //return abs(round($diff / 86400)); 
	return round($diff / 86400); 
} 
?>