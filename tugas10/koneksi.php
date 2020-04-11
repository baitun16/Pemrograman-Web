<?php
$host="localhost";
$username= "root";
$password= "";
$dbname= "mydb";

$conn = mysqli_connect($host, $username, $password, $dbname);
	if (mysqli_connect_errno()) {
		echo "Connect to MySql Failed: ".mysqli_connect_error();
		exit();
	}
?>