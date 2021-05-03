<?php
include_once('includes/appStyle.php');
include_once('includes/appJS.php');
include_once('includes/DB_connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Students</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Birth Date</th>
							<th>EDIT</th>
							<th>DELETE</th>
						</tr>
					</thead>

					<tbody>
						<?php

						$query = "SELECT id, name, email, birth_date from students";
						$result = mysqli_query($connection, $query);

						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo '<tr>' . '<td>' . $row['id'] . '</td>' . '<td>' . $row['name'] . '</td>' . '<td>' . $row['email'] . '</td>' . '<td>' . $row['birth_date'] . '</td>' . '<td><a href="edit_form.php?id=' . $row['id'] . '">Edit</a></td>' . '<td><form action="delete_action.php" method="POST"><input type="hidden" name="id" value="' . $row['id'] . '"> <button type="button" class="btn btn-danger" id="delete-btn"0>DELETE</button> </form></td>' . '</tr>';
							}
						}

						mysqli_close($connection);

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>

<script type="text/javascript">
	$('#delete-btn').click(function (event) {
		event.preventDefault();

		var result = confirm("Are you sure?");

		if (result == true) {
			$(this).parent('form').submit();
		}
	});
</script>