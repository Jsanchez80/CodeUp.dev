<?php

// <!-- Create a file named authorized.php in your codeup.dev site. Add some HTML that simply says "Authorized" when it is viewed in the browser. -->

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/css/authorized.css">
	</head> 
	<body>
	<h3>Welcome Nico!</h3>
		
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