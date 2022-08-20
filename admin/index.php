<?php
session_start();

if(isset($_SESSION['username'])){
	echo "";
}else{
	header('Location: login.php');
	exit();
}

?>
<!DOCTYPE html>
<html>
<title>Admin Panel - EasyShop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Panel v1</h3>
  <a href="#" class="w3-bar-item w3-button">New product</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<!--div class="w3-container w3-teal">
  <h1>My Page</h1>
</div-->


<div class="w3-container">
<h2>Hey, Admin!</h2>
<a href="logout.php">Log out</a>
<p>Welcome to your shop's dashboard!</p>
<p>You can manage products, sales, shop design here.</p>
</div>

</div>
      
</body>
</html>