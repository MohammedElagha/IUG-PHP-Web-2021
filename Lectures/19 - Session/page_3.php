<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<h1>Page 3</h1>

	<h3><?php echo $_SESSION['website_name']; ?></h3>
	
</body>
</html>

<?php

session_unset();

$website = $_SESSION['website_name'];

session_destroy();

?>