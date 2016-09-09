<?php

session_start();
// <!-- Create a file named authorized.php in your codeup.dev site. Add some HTML that simply says "Authorized" when it is viewed in the browser. -->

function pageController()
{
// 1.  Create a file named login.php in your codeup.dev site. Add a form that accepts a username and password and have the form submit to the same page (login.php).

// Check to see if the form was submitted without var_dumping: will post in the console:
// place the term "die();" after the header in so that the process stops the operation.
$redirect = "/php/login2.php";		
// Add a check to the authorized.php page to see if the user is logged in by checking the userIsLoggedIn key. If they are, redirect to the authorized.php page instead of showing the login page.
$username = $_SESSION['Logged_in'];
$password = ($_SESSION['userIsLoggedIn']);

if ($_SESSION['Logged_in'] && $_SESSION['userIsLoggedIn'] == true) {
	 
	} elseif 
		($username == '' || $password == '') {
			header("Location: $redirect");	
			die();
	} 

	return [
	'username' => $username,
	'password' => $password,
	];
	
	
	
} 
	extract(pageController());

?> 
 





<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/css/authorized.css">
	</head> 
	<body>
	<div>
	<h3>Welcome <?= $username ?></h3>
	</div>
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
		<div id="container" class="logInBox"> 
			<h3>Profile:</h3> 
		</div id="lower">
		</form>
		</div>
	</body>
</html>