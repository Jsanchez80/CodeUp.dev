<?php 

/////////////////////////////////////////////////////////////////////////////////
// 1. Create a new file named my-favorite-things.php and put it in your public directory.
//////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////
// 2.  Create an array of your favorite things. This array should contain at least five things.
//////////////////////////////////////////////////////////////////////////////////

// $favesArray = array("WebDev", "Auto Detailing", "Music", "Food(Pizza and Burgers)", "WebDev Events", "Breakfast Tacos");




////////////////////////////////////////////////////////////////////////////////
// 3.  We will need to loop through this array and display each element inside your HTML.
// 			Use an HTML table for this display.
// 			Use CSS to add a light gray background on every other row for a nice effect.
//			Have fun and make it beautiful!
//////////////////////////////////////////////////////////////////////////////////
	function getmyFaves() {
		$favesArray = ["WebDev", "Auto Detailing", "Music", "Food(Pizza and Burgers)", "WebDev Events", "Breakfast Tacos"];
		$min = 0;
		$max = count($favesArray) -1;
		$randomFaves = mt_rand($min,$max);
		return $favesArray[$randomFaves] . " " . PHP_EOL;

} 
	 $faves = getmyFaves();
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="">
	</head>
	<body>
		<h3>One of your faves is <?= $faves;?></h3>
		





	</body>
	</html>
