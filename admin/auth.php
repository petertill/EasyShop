<?php
session_start();
$fusername = $_POST['username'];
$fpassword = $_POST['password'];

$susername = "admin";
$spassword = "Faszom200";

if(($fusername == $susername) and ($fpassword == $spassword)){
	$_SESSION["islogged"] = true;
	$_SESSION["username"] = "admin";
	
	header('Location: index.php');
	exit();
}else{
	header('Location: login.php?m=error');
// or die();
  exit();
}






?>
