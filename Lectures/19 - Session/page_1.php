<?php

session_start();

$_SESSION["website_name"] = "Agha Website";
$_SESSION["website_name"] = "My Website";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<h1>Page 1</h1>

	<h3><?php echo $_SESSION['website_name']; ?></h3>
</body>
</html>