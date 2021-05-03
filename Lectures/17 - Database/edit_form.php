<?php
include_once('includes/appStyle.php');
include_once('includes/appJS.php');
include_once('includes/DB_connection.php');

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$query = "select * from students where id = $id limit 1";
	$result = mysqli_query($connection, $query);

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
</head>
<body>

	<div class="container">

		<div class="row">
			<a href="students.php">View Students</a>
		</div>

		<?php

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$id = $_GET['id'];

			$name = $_POST['name'];
			$email = $_POST['email'];
			$birth_date = $_POST['birth_date'];
			$nationality = $_POST['nationality'];

			if (!empty($id) && !empty($name) && !empty($email) && !empty($birth_date) && !empty($nationality)) {

				$query = "update students set name = '$name', email = '$email', birth_date = '$birth_date', nationality = '$nationality' where id = $id";
				$result = mysqli_query($connection, $query);

				if ($result) {
					echo '<div class="row"><div class="col-12"><div class="alert alert-success">Student reconrd updated successfully</div></div></div>';
				} else {
					echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to update this student</div></div></div>';
				}

			} else {
				echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Some fields are missing</div></div></div>';
			}
		} else {
			if (isset($_GET['id'])) {
				$id = $_GET['id'];

				$query = "select * from students where id = $id limit 1";
				$result = mysqli_query($connection, $query);

				if (mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
				}
			}
		}

		?>

		<div class="row">
			<div class="col-12">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?id=' . $_GET['id']; ?>" method="POST" id="my-form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control" value="<?= ((isset($row)) ? $row["name"] : "" ) ?>">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" class="form-control" value="<?= ((isset($row)) ? $row["email"] : "" ) ?>">
					</div>

					<div class="form-group">
						<label for="birth_date">Birth of Date</label>
						<input type="text" name="birth_date" id="birth_date" class="form-control" value="<?= ((isset($row)) ? $row["birth_date"] : "" ) ?>">
					</div>

					<div class="form-group">
						<label for="nationality">Nationality</label>
						<select name="nationality" id="nationality" class="form-control">
							<option value="-1"></option>
							<option value="PAL" <?php if (isset($row) && $row['nationality'] == 'PAL') echo 'selected'; ?> >Palestinian</option>
							<option value="SYR" <?php if (isset($row) && $row['nationality'] == 'SYR') echo 'selected'; ?> >Syrian</option>
						</select>
					</div>

					<button class="btn btn-primary" type="button" id="save-btn">Save</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>



<script type="text/javascript">
	$('#save-btn').click(function (event) {
		event.preventDefault();

		var result = confirm("Are you sure?");

		if (result == true) {
			$('#my-form').submit();
		}
	});
</script>