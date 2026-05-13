<?php
session_start();
unset($_SESSION['curSession']);
unset($_SESSION['user']);
session_regenerate_id();
header('location:login.php');
?>