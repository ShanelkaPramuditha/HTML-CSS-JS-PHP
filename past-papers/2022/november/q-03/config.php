<!-- Part b) Create database connection -->
<?php
$servername = "localhost";
$username = "root";
$password = "con@34#!.";
$dbname = "vehicle_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check the connection
if ($conn -> connect_error) {
   die("Connection failed: ". $conn -> connect_error);
}

// echo("Connected successfully");

// $conn -> close();

?>