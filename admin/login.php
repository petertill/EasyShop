<?php
$msg = $_GET['m'];

if($msg == "error"){
$message = "Wrong username or password. Nice try!";
}elseif($msg == "loggedout"){
	$message = "You have logged out of your account successfully!";
}else{
	$message = " ";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login - AdminPanel</title>
		<style>
		body{
			background-color: lightgray;
		}
		.login-modal{
			background-color: white;
			width: 50%;
		}
		</style>
	</head>
	<body><center></center>
		<div class="login-modal">
			<h3>Hey, Admin!</h3>
		<?php echo "<span style='color: red;'>$message</span>"; ?>
	<form method="POST" action="auth.php">
	<input type="text" name="username" id="un" placeholder="Username">
	<input type="password" name="password" id="pw" placeholder="Passw***">
	<input type="submit" value="Login">
	</form>
	</div>
	</body>
</html>
