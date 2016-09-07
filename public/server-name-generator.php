<?php

//////////////////////////////////////////////////////////////////////////////////
// 1.  Create a new file in your public directory named server-name-generator.php
//////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////
// 2.  Create two arrays.
// 			One containing at least 10 adjectives.
// 			Another containing at least 10 nouns.
//////////////////////////////////////////////////////////////////////////////////

// $adjectiveArray = array("grand", "delicate", "woven", "soft", "light", "cool", "heavy", "bold", "electric", "radiant", "dark");

// $nounArray = array("willow", "oak", "fox", "grizzly", "cell", "soma", "metal", "mind", "skin", "energy", "matter");

//////////////////////////////////////////////////////////////////////////////////
// 3.  Create a function that will return a random element from an array.
//////////////////////////////////////////////////////////////////////////////////
	// $nounArray = array("willow", "oak", "fox", "grizzly", "cell", "soma", "metal", "mind", "aura", "energy", "matter");

	// 	$min = 0;
	// 	$maxAd = count($adjectiveArray) -1;
	// 	$randomAd = mt_rand($min,$maxAd);
	// 	return $adjectiveArray[$randomAd] . PHP_EOL;

//////////////////////////////////////////////////////////////////////////////////
// 4.  Create a function that returns the string value of our new server name made by  combining a random adjective with a random noun.
// 		Each time you refresh the page a different result should be displayed.
// 		Make sure you have fun with it. Add CSS to make it fancy.
//////////////////////////////////////////////////////////////////////////////////

	function getServerName() {
		$adjectiveArray = array("grand", "delicate", "woven", "soft", "light", "cool", "heavy", "bold", "electric", "radiant", "dark");

		$nounArray = array("willow", "oak", "fox", "grizzly", "cell", "soma", "metal", "mind", "aura", "energy", "matter");

		$min = 0;
		$maxAd = count($adjectiveArray) -1;
		$maxNoun = count($nounArray) - 1;
		$randomAd = mt_rand($min,$maxAd);
		$randomNoun = mt_rand($min, $maxNoun);
		return $adjectiveArray[$randomAd] . " " . $nounArray[$randomNoun] . PHP_EOL;
		


	// echo "Your server name is " . getServerName($adjectiveArray, $nounArray) .  "." . PHP_EOL;

	} 
	$serverName = getServerName();

?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="">
	</head>
	<body>
		<h3>Your server name is <?= $serverName;?></h3>
		





	</body>
	</html>

