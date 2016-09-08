<?php
	///////////////////////////////////////////////////////////////////////////////////
	// 1.  Create a file called counter.php using the page controller template.
	//////////////////////////////////////////////////////////////////////////////////


	///////////////////////////////////////////////////////////////////////////////////
	// 2.  In your HTML, you will need two links. One that says up and another that says down.
	// 		Add a heading that shows a number representing the current counter value. This value will start at zero. 
	// 		When up is clicked, the counter value should increase; when down is clicked, it should decrease.
	// 		The up and down links will send GET requests back to the counter page itself.
	//////////////////////////////////////////////////////////////////////////////////

	///////////////////////////////////////////////////////////////////////////////////
	// 3.  Create a function that will access the $_GET superglobal variable. It should determine what 	the new counter value is and return it.	//////////////////////////////////////////////////////////////////////////////////

	///////////////////////////////////////////////////////////////////////////////////
	// 4.  Use the extract() function to change the return value of the pageController() into variables for your HTML.
	//////////////////////////////////////////////////////////////////////////////////
$counter = isset($_GET['counter']) ? $_GET['counter'] : 0;
$url = "counter.php"

 


?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
		</head>
		<body>
			<div> $counter;
			</div>
			<h3>This page has been viewed: <? = $counterIncDec?></h3>
			<a href="<?=$url; ?>?counter=<?= $counter + 1?>">Up</a>
			<a href="<?=$url; ?>?counter=<?= $counter - 1?>">Down</a>
		</body>
	</html>