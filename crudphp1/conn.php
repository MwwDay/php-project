<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "crudkampus";

//create connection 

$conn = mysqli_connect($server, $username, $pass, $db);

//check conncetion

if ($conn->connect_error) {

	die("Connection Failed!" . $conn->connect_error);
}

?>