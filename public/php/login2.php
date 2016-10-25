<?php

// Add a check to the login.php page to see if the user is logged in by checking the logged_in_user key. If they are, redirect to the authorized.php page instead of showing the login page.
session_start();
// require_once 'functions.php';
require_once 'header_footer.html';
require_once 'auth.php';

// var_dump($_POST); //Use to debug the username and password entries:

function pageController()
{
// 1.  Create a file named login.php in your codeup.dev site. Add a form that accepts a username and password and have the form submit to the same page (login.php).
$redirect = "/php/authorized.php";
$direct = "/php/login2.php";

$username = isset($_POST['username']) ? $_POST['username']: '';
$password = isset($_POST['password']) ? $_POST['password']: '';

 
 $authObj = new Auth();
 $authObj->attempt();
 
// Check to see if the form was submitted without var_dumping: will post in the console:
// place the term "die();" after the header in so that the process stops the operation.
// if(!empty($_POST)) {
// 	if inputHas('username') && inputHas('password')
// 		$username = inputGet('username');
// 		$password = inputGet('password')
	 if(Auth::attempt($username, $password)) {
// Add a check to the login.php page to see if the user is logged in by checking the logged_in_user key. If they are, redirect to the authorized.php page instead of showing the login page.

		$_SESSION['login_user'] = $username;
		$_SESSION['userIsLoggedIn'] = true;
		header("Location: $redirect"); 
		die();
			// echo("<script>alert('Please enter a valid username or password');</script>");	
	}

	return [
	'username' => $username,
	'password' => $password,
	];

}	extract(pageController());



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/css/login2.css">

	</head> 
	<body>
	
	<ul>
	</ul>
		<div id="container" class="logInBox">       
		<form method="POST" action="">
			<label for="username">Username:</label>
				<input type="text" id="username" name="username">
			<label for="password">Password:</label>
				<input type="password" id="password" name="password">
		<div id="lower">
			<input type="checkbox"><label for="checkbox">Keep me logged in</label>
			<input type="submit">
		</div><
		</form>
		</div>
		<?php 'header_footer.html' ?>
	</body>
</html>