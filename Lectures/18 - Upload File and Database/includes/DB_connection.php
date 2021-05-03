<?php

$connection = mysqli_connect('localhost', 'root', 'rootroot', 'web2021_course');

if (!$connection) {
	echo "Connection Failed";
	die("Connection Failed: " . mysqli_connect_error());
}


?>