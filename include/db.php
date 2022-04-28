<?php

//Your Mysql Config
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccs";
$dbname2 = "startouch2012";
$dbname3 = "startouch2016";

//Create New Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

$conn2 = new mysqli($servername, $username, $password, $dbname2);

$conn3 = new mysqli($servername, $username, $password, $dbname3);

//Check Connection
if($conn->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}

if($conn2->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}

if($conn3->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}
