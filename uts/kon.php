<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "euy";

$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (mysqli_connect_errno()) {
		echo "Connect to MySql Failed: ".mysqli_connect_error();
		exit();
	}
?>