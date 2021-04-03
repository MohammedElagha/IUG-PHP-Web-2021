<?php
include_once('style.php');
include_once('appJS.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Forms</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<form action="actions/action.php?id=45124654" method="POST">
					<div class="form-group">
						<label for="id">Name</label>
						<input type="text" name="name" id="name" class="form-control">
					</div>

					<div class="form-group">
						<label for="birth_date">Birth of Date</label>
						<input type="text" name="birth_date" id="birth_date" class="form-control">
					</div>

					<div class="form-group">
						<label for="nationality">Nationality</label>
						<select name="nationality" id="nationality" class="form-control">
							<option value="-1"></option>
							<option value="PAL">Palestinian</option>
							<option value="SYR">Syrian</option>
						</select>
					</div>

					<button class="btn btn-primary" type="submit">Save</button>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<a href="http://localhost/Web2021Course/Lectures/15 - Import File/first.php?id=120075501&gpa=95.14">Go to Some link</a>
			</div>
		</div>
	</div>

</body>
</html>