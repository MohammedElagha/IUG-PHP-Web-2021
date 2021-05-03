<?php
include_once('../includes/AppStyle.php');
include_once('../includes/AppJS.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Car</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<form action="action.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Model</label>
						<input type="text" name="model" class="form-control">
					</div>

					<div class="form-group">
						<label>Year</label>
						<input type="number" name="year" class="form-control">
					</div>

					<div class="form-group">
						<label>Image</label>
						<input type="file" name="image" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>