<?php
$msg = $_GET['m'];

if($msg == "error"){
$message = "<span style='width: 40%; color: white; background-color: red;'>Wrong username and/or password! Nice try!</span>";
}elseif($msg == "loggedout"){
	$message = "<div style='width: 40%; color: white; background-color: red; padding: 10px; border-radius: 10px;'>You have been logged out or the session is expired</div>";
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
		input{
			padding: 5px;
			width: 40%;
		}
		</style>
	</head>
	<body style="background-color: #F0F8FF;"><center>
	<div style="
            -webkit-box-shadow: 10px 10px 5px -8px rgba(0,0,0,0.58);
-moz-box-shadow: 10px 10px 5px -8px rgba(0,0,0,0.58);
box-shadow: 10px 10px 5px -8px rgba(0,0,0,0.58);
            
            background-color: white; width: 50%;align-content: left; padding: 50px;">
			<h1>Hey, Admin!</h1>
		<?php echo $message; ?><br>
	<form method="POST" action="auth.php">
	<label for="un">Username</label><br>
	<input type="text" name="username" id="un" placeholder="Username"><br><br
	<label for="pw">Password</label><br>
	<input type="password" name="password" id="pw" placeholder="Passw***"><br><br>
	<input type="submit" value="Login">
	</form>
	</div></center>
	</body>
</html>
