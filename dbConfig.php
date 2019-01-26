<?php
$dbHost = 'den1.mysql6.gear.host';
$dbUsername = 'biadata';
$dbPassword = '	Ng7u_bm0GOB_';
$dbName = 'test';


$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}