<?php
require_once 'header_footer.html';

session_start();
// <!-- Create a file named authorized.php in your codeup.dev site. Add some HTML that simply says "Authorized" when it is viewed in the browser. -->

function pageController()
{
// 1.  Create a file named login.php in your codeup.dev site. Add a form that accepts a username and password and have the form submit to the same page (login.php).

// Check to see if the form was submitted without var_dumping: will post in the console:
// place the term "die();" after the header in so that the process stops the operation.
$redirect = "/php/login2.php";	
	
// Add a check to the authorized.php page to see if the user is logged in by checking the userIsLoggedIn key. If they are, redirect to the authorized.php page instead of showing the login page.


if (isset($_SESSION['login_user']) && isset($_SESSION['userIsLoggedIn'])) {
	 		$username = $_SESSION['login_user'];
	 		
	} else {
			header("Location: $redirect");	
			die();
	} 

	return [
	'username' => $username,
	];
	
	
} 
 extract(pageController());

?> 
 





<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/css/authorized.css">
		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic|Cinzel:400,700,900' rel='stylesheet' type='text/css'>
	</head> 
	<body>
	<div>
	<?php 'header_footer.html' ?>
	<h3>Welcome <?= $username ?></h3> 
	</div>     
		<form>
			<a class="submit" type="button" value="Log Out" href="/php/logout.php">Leave Page</a>
		</form>
	</body>
</html>