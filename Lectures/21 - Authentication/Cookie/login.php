<?php

include_once('includes/DB_connection.php');
include_once('includes/appStyle.php');
include_once('includes/appJS.php');


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="container">

		<?php

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$query = "select * from users where username = '$username' AND password = '$password'";
			$result = mysqli_query($connection, $query);

			var_dump($result);

			if (mysqli_num_rows($result) > 0) {
				// login
				setcookie('is_login', true, time() + 80000);

				header("Location: http://localhost/Web2021Course/Lectures/21 - Authentication/Cookie/content_page_1.php");
			} else {
				echo '<div class=row><div class="col-12"><div class="alert alert-danger">Failed</div></div></div>';
			}
		}


		?>


		<div class="row">
			<div class="col-12">
				<form action="" method="POST">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>

					<button class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>