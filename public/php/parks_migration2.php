<?php


require 'parks_db.php';

$query = "DROP TABLE IF EXISTS parks_db";

$dbc->exec($query);

$query = 'CREATE TABLE parks_db (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    location VARCHAR(240) NOT NULL,
    date_established DATE,
    area INT,
    description TEXT,
    PRIMARY KEY (id) 
)';

$dbc->exec($query);