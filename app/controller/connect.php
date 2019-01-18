<?php

$host = "db4free.net";
$username = "motoparts";
$password = "incorrect_2";
$dbname = "motoparts_db";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('Connection failed: ' . mysqli_error($conn) );
}

// echo 'connected successfully';
echo"<br>";
?>