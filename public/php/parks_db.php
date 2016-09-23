<?php

require 'parks_db_define.php';

// Get new instance of PDO object
$dbc = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

///////////////////////////////////////////////////////////////
// I don't want to output server data to the output UI in production. 
// However mainting an echo initially, allows us to verify that 
// data is being sent properly across platforms. 
////////////////////////////////////////////////////

// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";