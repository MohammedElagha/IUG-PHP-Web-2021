<?php

// action code for receive and handle data from the form


// $_SERVER['REQUEST_METHOD']

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// $_POST , $_GET

	$name = $_POST['name'];
	$birth_date = $_POST['birth_date'];
	$nationality = $_POST['nationality'];

	$id = $_GET['id'];
}


?>