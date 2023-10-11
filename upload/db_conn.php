<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "pet_care";

$conn = mysqli_connect("localhost","root",'',"pet_care");

if (!$conn) {
	echo "Connection failed!";
	exit();
}