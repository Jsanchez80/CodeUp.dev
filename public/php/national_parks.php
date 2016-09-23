<?php

require 'parks_db.php';

///////////////////////////////////////////////////////////////////
// I wanted to make sure all data was printing to the screen in
// the correct order. My require's point and source data 
// from parks_db (Which contain the variables containing data to my DB)
// and parks_db_define.php(Which contain the server data and keep it hidden).
///////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////
// *Note: This thought process allowed me to print data to
// my output source and verify the filepaths/sources are correct.
// Using the code below began the building/architecture of my code.
//////////////////////////////////////////////////////////
$stmt = $dbc->query('SELECT * FROM parks_db');
// print_r($stmt->fetch(PDO::FETCH_BOTH));
/////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////
// We want to make sure we can call on our DB everytime user 
// input changes. One way we can accomplish this is through the 
// creation of a function that sources the database and allows
// a visual representation of it's contents to the user. 
////////////////////////////////////////////////////

function getParks()

{
    // Bring the $dbc variable into scope somehow

    $stmt = $dbc->query('SELECT * FROM parks_db');

    $rows = array();
    while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
        $rows[] = $row;
    }

    return $rows;

} print_r($stmt->fetch(PDO::FETCH_BOTH));

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>National Parks</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="/css/national_parks.css">
		<script src="/Js/national_parks.js"></script>
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
									<i class="glyphicon glyphicon-filter"></i>
								</span>
							</div>
						</div>
						<div class="panel-body">
							<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter National Parks" />
						</div>
						<table class="table table-hover" id="dev-table">
							<thead>
								<tr>
									<th>Rank</th>
									<th>Park</th>
									<th>State</th>
									<th>Area</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>	
</html>