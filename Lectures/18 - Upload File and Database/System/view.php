<?php
include_once('../includes/AppStyle.php');
include_once('../includes/AppJS.php');
include_once('../includes/DB_connection.php');
include_once('../includes/system_constants.php');



/*

Car: model, year, image

cars: id, model, year, image(text)

*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Cars</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>image</th>
							<th>Model</th>
							<th>Year</th>
						</tr>
					</thead>

					<tbody>
						<?php
							$query = "SELECT * FROM cars";
							$result = mysqli_query($connection, $query);

							if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
									echo '<tr><td><img width="300px" src="' . $system['storage_base_url'].$row['image'] . '"></td><td>' . $row['model'] . '</td><td>' . $row['year'] . '</td></tr>';
								}
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>