<?php
$dbHost = 'den1.mysql6.gear.host';
$dbUsername = 'biadata';
$dbPassword = '123#123';
$dbName = 'biadata';


$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}