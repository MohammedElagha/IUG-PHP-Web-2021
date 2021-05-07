
<?php

session_start();

$website_name = $_SESSION['website_name'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<h1>Page 2</h1>

	<h3><?php echo $_SESSION['website_name']; ?></h3>
</body>
</html>