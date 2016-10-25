<?php

	
	require 'parks_db.php';
	
	// require 'parks_seeder.php';

    $stmt = $dbc->query('SELECT * FROM parks_db');

	function getParks($dbc, $page)
	{
		$offset = ($page - 1) * LIMIT;
		$query = "SELECT * FROM parks_db LIMIT ".LIMIT." OFFSET $offset";
		//echo $query;
		$stm = $dbc->query($query);
		return $stm;
	}

	function getParksCount($dbc)
	{
		$query = "SELECT * FROM parks_db;";
		$stm = $dbc->query($query);
		return $stm;
	}

	function pageCtrl($dbc)
	{
		$data = [];
		$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
		$stm = getParks($dbc, $page);
		$parks = $stm->fetchAll(PDO::FETCH_ASSOC);
		$pages = round(getParksCount($dbc)->rowCount() / LIMIT);

		$data['total'] = getParksCount($dbc)->rowCount();
		$data['rows'] = $parks;
		$data['pages'] = $pages;
		$data['curPage'] = $page;
		$i = 0;

	}
		// Rather than halting execution when the user passes an incorrect value, use try and catch to grab the error message and cache it, so that the rest of the page can continue as normal. (Hint: An array called $errors could be useful for this.)


// 		$errors = [];

// 		try {
			
// 			throw new Exception('$key needs to be a number');

// 		} catch(Exception $e) {
// 			$errors [] = $exception->getMessage();

// 			echo "An unknown error occurred!, please double check your entry" . PHP_EOL;
// 		}
// 			var_dump($errors);

// // set variable and figure out what conditions you're solving for:
// // Checks conditions and prepares error messages 
// 		if (isset($_REQUEST['submitted'])) {
// 			$errors = array();

// 		}


// // Checks If the park name is entered, if it is proceed to next step
// 		if (!empty($_REQUEST['name'])) {
// 			$name = $_REQUEST['name'];

// $nameVerify compares the data you entered to the condition you create for alphabets A-Z. 
		// 	$nameVerify = ctype_alpha();

		
		// if (preg_match($nameVerify,$name)) {

		// 	$name = $_REQUEST['name'];

		// } else {
			
		// 	$errors = 'Park name can only contain alphabetic letters A-Z';

		// } 

		// 	$errors = 'You forgot to enter the park name';
		// }

// Checks If the park location  is entered, if it is proceed to next step		
			
		// if (!empty($_REQUEST['location'])) {
		// 	$location = $_REQUEST['location'];

		// // $locationVerify compares the data you entered to the condition you create for alphabets A-Z.

		// 	$locationVerify = ctype_alpha();

		// }

		// if (preg_match(($locationVerify, $location)) {

		// 	$location = $_REQUEST['location'];
		// } else {

		// 	$errors = 'Park location can only contain alphabetic letters A-Z';

		// } else {

		// 	$errors = 'You forgot to enter the park location';
		// }

		// Checks If the park "date established"  is entered, if it is proceed to next step	

		// if (!empty($_REQUEST['established'])) {
		// 	$established = $_REQUEST['established'];
			
		// // $establishedVerify compares the data you entered to the condition you create for date established is alphanumeric.

		// 	$establishedVerify = ctype_alnum();
		// }

		// if (preg_match(($establishedVerify, $established)) {

		// 	$established = $_REQUEST['established'];
		// } else {

		// 	$errors = 'Park established can only contain numbers';

		// } else {

		// 	$errors = 'You forgot to enter the park established';
		// }

		// Checks If the area  is entered, if it is proceed to next step	

		// if (!empty($_REQUEST['area'])) {
		// 	$area = $_REQUEST['area'];
			
		// // $areaVerify compares the data you entered to the condition you create for area is numeric.

		// 	$areaVerify = is_numeric();
		// }

		// if (preg_match(($areaVerify, $area)) {

		// 	$area = $_REQUEST['area'];
		// } else {

		// 	$errors = 'Park area can only contain numbers';

		// } else {

		// 	$errors = 'You forgot to enter the park area';
		// }



		// Checks If the description  is entered, if it is proceed to next step	

		// if (!empty($_REQUEST['description'])) {
		// 	$description = $_REQUEST['description'];
			
		// // $descriptionVerify compares the data you entered to the condition you create for description is alphanumeric.

		// 	$descriptionVerify = is_numeric();
		// }

		// if (preg_match(($descriptionVerify, $description)) {

		// 	$description = $_REQUEST['description'];
		// } else {

		// 	$errors = 'Park description must contain content';

		// } else {

		// 	$errors = 'You forgot to enter the park description';
		// }








		// use try and catch to grab the error message and cache it, so that the rest of the page can continue as normal. (Hint: An array called $errors could be useful for this.)
		


	// 	return $data;

	// }

	// extract(pageCtrl($dbc));


?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<!-- <link rel="stylesheet" href="/css.parks2.css"> -->
 	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body>
 <div class="container">
	    <!-- <h1>Click the filter icon <small>(<i class="glyphicon glyphicon-filter"></i>)</small></h1> -->
	<div class="row">
	<div class="col-md-6">
	<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">National Parks</h3>
		<div class="pull-right">
			<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
			<!-- <i class="glyphicon glyphicon-filter"></i> -->
			</span>
	</div>
	</div>
	<div class="panel-body">
		<form action="parks2.php" method="post">
		<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Search National Parks" autocomplete="on">
		<input type="submit" value="search">
		</form>
	</div>
	<table class="table table-hover" id="dev-table">
	<thead>
 <div class="container"> 	<table class="table table-bordered">
 		<caption>National Parks</caption>
 		<thead>
 			<tr>
 				<th>Name</th>
 				<th>Location</th>
 				<th>Date established</th>
 				<th>Acres</th>
 				<th>Description</th>
 			</tr>
 		</thead>
 		<tbody>
 		<?php foreach ($rows as $row): ?>
 			<tr>
 				<td align="left"><?= $row['name'] ?></td>
 				<td><?= $row['location'] ?></td>
 				<td align="center">
 					<?= $row['date_established'] ?>		
 				</td>
 				<td align="right">
 					<?= ($row['area']) ?>		
 				</td>
 				<td align="right">
 					<?= ($row['description']) ?>		
 				</td>
 			</tr>
 		<?php endforeach;  ?>
 		</tbody>
 	</table>
 	<h3>Total of rows: <?= $total ?></h6>

<!-- Code for Pagination(reflects the page number) you want to see -->
 	<ul class="pagination">
		<tr>
			<li>
				<a href="parks2.php?page=<?= $curPage-1?>">Previous</a>
			</li>
 		<?php for ($i=0;$i<$pages;$i++): ?>
			<li>
				<a href="parks2.php?page=<?=$i+1?>">
					<?= $i+1?>
				</a>
			</li>
 		<?php endfor;  ?>
 			<li>
				<a href="parks2.php?page=<?= $curPage+1?>">Next</a>
			</li>
 		</tr>
 	</ul>	
 </div>	
 <div>
 	<h3>Enter A National Park:</h3>
 	<!-- Code to submit a park if you don't see a park -->
 	
 		<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
		<div class="row">
			<label for="name">Park Name:</label>
			<br>
			<input id="name" class="input" name="text" type="text" value="" size="30" />
			<br>
		</div>
		<div class="row">
			<label for="location">State location:</label>
			<br>
			<input id="location" class="input" name="text" type="text" value="" size="30" /><br />
		</div>
		<div class="row">
			<label for="established">Date established:</label>
			<br>
			<textarea id="established" class="input" name="text" type="text" cols="30"></textarea>
			<br>
		</div>
		<div class="row">
			<label for="are">Area:</label>
			<br>
			<textarea id="area" class="input" name="text" type="text" cols="30"></textarea>
			<br>
		</div>
		<div class="row">
			<label for="description">Description:</label>
			<br> 
			<textarea id="description" class="input" name="text" rows="7" cols="30"></textarea>
			<br>
		</div>
			<input id="submit" type="submit" value="Submit">
	</form>	
	</div>	
				
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

 	</body>
 </html>