<?php
include_once('../includes/DB_connection.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (!empty($_POST['model']) && !empty($_POST['year']) && !empty($_FILES['image'])) {

		$file_name = $_FILES['image']['name'];
		$file_tmp = $_FILES['image']['tmp_name'];
		$file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

		$file_new_name = strval(time() + rand(1, 1000000000)) . ".$file_ext";
		$upload_path = '../uploads/images/' . $file_new_name;
		move_uploaded_file($file_tmp, $upload_path);



		#####################################################



		$year = $_POST['year'];
		$model = $_POST['model'];
		$image = str_replace('../', '', $upload_path);
		$query = "INSERT INTO cars (year, model, image) VALUES ($year, '$model', '$image')";
		$result = mysqli_query($connection, $query);
	}

}


?>