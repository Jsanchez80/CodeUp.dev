<?php
	var_dump($_GET);
	var_dump($_POST);
	?>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>ENVI Login Page</title>
	</head>
	<body bgcolor="#00688B">
		<img src="/img/envi logo.png">
	
		<h2><font color="white">User Login</font></h2>
		<form method="POST" action="codeup.dev/login_form.php">
		<input type="hidden" id="user_id" name="user_id" value="1234">
		 <p>
		<label for="username"><font color="white">Username</font></label>
			<input id="username" name="username" type="text" Placeholder="Enter Username Here">
		</p>
		<p>
		<label for="password"><font color="white">Password</font></label>
			<input id="password" name="password" type="password" placeholder="Enter Password Here">
		</p>
			<button type="submit">Login</button>
			<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
		<form>
			<label for="Remember Me">Remember Me?</label>
			<a href="codeup.dev/Registration_Form.php"><h5><font color="white">Create Account</font></h5></a>
		</form>
	</body>
</html>
	  	