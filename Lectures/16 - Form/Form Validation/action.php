<?php


# $_GET, $_POST
# $_SERVER


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$book_name = $_POST["name"];
	$edition = $_POST['edition'];
	$year = $_POST['year'];
	$author = $_POST['author_name'];
	$email = $_POST['author_email'];

	$timezone = $_GET['timezone'];

	# required, type, format

	if (!empty($name) && !empty($edition)) {
		# isset(), !is_null()

		if (is_string($name)) {
			# is_string, is_numeric, is_boolean

			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

			}
		}
	}
}


# Regular Experssion (ReGex)
# 05[9|6][2-9][0-9]{6}
# [a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+

// if (preg_match("05[9|6][2-9][0-9]{6}", $phone)) {

// }

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<a href="myform.php">Back</a>
</body>
</html>