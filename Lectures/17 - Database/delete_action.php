<?php

include_once('includes/DB_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = $_POST['id'];

	if (!empty($id)) {
		$query = "delete from students where id = $id";
		$result = mysqli_query($connection, $query);

		if ($result) {
			echo "Deleted successfully";
		} else {
			echo "Failed to delete";
		}

		mysqli_close($connection);
	} else {
		echo "ID is missing";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="students.php">View Students</a>
</body>
</html>