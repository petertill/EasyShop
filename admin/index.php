<?php
session_start();

if(isset($_SESSION['username'])){
	echo "Welcome, admin!";
}else{
	header('Location: login.php');
	exit();
}

?>
<a href="logout.php">Log out</a>
