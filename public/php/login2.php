<?php

var_dump($_POST);

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