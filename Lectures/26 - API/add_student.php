<?php

$name = $_POST['name'];
$gpa = $_POST['gpa'];
$email = $_POST['email'];
$nationality = $_POST['nationality'];
$birth_date = $_POST['birth_date'];

$connection = mysqli_connect("localhost" , "root" , "rootroot", "web2021_course");

$query = "insert into students (name, gpa, email, nationality, birth_date) values ('$name', $gpa, '$email', '$nationality', '$birth_date')";

$result = mysqli_query($connection, $query);

if ($result) {
	$status = true;
} else {
	$status = false;
}

echo json_encode(["status" => $status]);

?>