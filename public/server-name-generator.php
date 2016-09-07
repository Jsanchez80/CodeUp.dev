<?php

//////////////////////////////////////////////////////////////////////////////////
// 1.  Create a new file in your public directory named server-name-generator.php
//////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////
// 2.  Create two arrays.
// 			One containing at least 10 adjectives.
// 			Another containing at least 10 nouns.
//////////////////////////////////////////////////////////////////////////////////

$adjectiveArray = array("grand", "delicate", "woven", "soft", "light", "cool", "heavy", "bold", "electric", "radiant", "dark");

// $nounArray = array("willow", "oak", "fox", "grizzly", "cell", "soma", "metal", "mind", "skin", "energy", "matter");

//////////////////////////////////////////////////////////////////////////////////
// 3.  Create a function that will return a random element from an array.
//////////////////////////////////////////////////////////////////////////////////

	function getServerName($adjective) {
		$adjectiveArray = array("grand", "delicate", "woven", "soft", "light", "cool", "heavy", "bold", "electric", "radiant", "dark");
		$min = 0;
		$max = count($adjectiveArray) -1;
		$randomIndex = mt_rand($min,$max);
		return $adjectiveArray[$randomIndex];
		



	} getServerName($adjectiveArray);

	echo "Your server name is " . getServerName($adjectiveArray) . PHP_EOL;