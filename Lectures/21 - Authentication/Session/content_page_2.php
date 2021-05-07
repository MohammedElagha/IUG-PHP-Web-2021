<?php
session_start();

if (isset($_SESSION['is_login']) && $_SESSION['is_login']) {

} else {
	header("Location: http://localhost/Web2021Course/Lectures/21 - Authentication/Session/login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Page 2</h1>

	<p><a href="logout.php">Logout</a></p>
</body>
</html>