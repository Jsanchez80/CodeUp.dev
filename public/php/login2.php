<?php

// var_dump($_POST); //Use to debug the username and password entries:

function pageController()
{
// 1.  Create a file named login.php in your codeup.dev site. Add a form that accepts a username and password and have the form submit to the same page (login.php).
$redirect = "/php/authorized.php";

$username = isset($_POST['username']) ? $_POST['username']: '';
$password = isset($_POST['password']) ? $_POST['password']: '';

// Check to see if the form was submitted without var_dumping: will post in the console:
// place the term "die();" after the header in so that the process stops the operation.

if(!empty($_POST)) {
	if($username == "nico" && $password =="password") {
		header("Location: $redirect");
		die(); 
	} elseif($username == '' || $password == '') {
			echo("<script>alert('Please enter a valid username or password');</script>");	
	} else {
		echo("<script>alert('Login Failed! Try Again.');</script>");
	}
}

	return [
	'username' => $username,
	'password' => $password,
	];

}	pageController();



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/css/login2.css">
	</head> 
	<body>
		
		<div id="container" class="logInBox">       
		<form method="POST">
			<label for="username">Username:</label>
				<input type="text" id="username" name="username">
			<label for="password">Password:</label>
				<input type="password" id="password" name="password">
		<div id="lower">
			<input type="checkbox"><label for="checkbox">Keep me logged in</label>
			<input type="submit" value="Login" location="/php/login2.php">
		</div><!--/ lower-->
		</form>
		</div>
	</body>
</html>