<?php

if (count($_COOKIE) > 0) {

}


if (isset($_COOKIE['user'])) { 

}


if (!empty($_COOKIE['user'])) { 
	
}


setcookie("user" , "Mohammed" , time() + 5000);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Page 2</h1>
</body>
</html>