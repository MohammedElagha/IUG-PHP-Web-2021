<?php
include_once('style.php');
include_once('appJS.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	# exist, not empty, format
	# required = exist + not empty

	# exist -> isset
	# not empty -> !empty
	# required -> isset + !empty OR !empty


	if (isset($_POST['name']) && isset($_POST['birth_date']) && isset($_POST['email'])) {
		$name = $_POST['name'];
		$birth_date = $_POST['birth_date'];
		$email = $_POST['email'];

		if (!empty($name) && !empty($birth_date) && !empty($email)) {
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$nationality = $_POST['nationality'];

				$id = $_GET['id'];

				$gender = $_POST['gender'];		# m OR f


				if (isset($_POST['agree']) && $_POST['agree'] == 'YES') {
					$agree = true;
				} else {
					$agree = false;
				}
			}
		}
	}

	
}
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
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?id=564544'; ?>" method="POST" id="my-form">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" class="form-control">
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

					<div class="form-group">
						<label>Gender</label>

						<input type="radio" name="gender" value="m" class="radio" checked> Male
						<input type="radio" name="gender" value="f" class="radio"> Female
					</div>

					<div class="form-group">
						<label>Are you agree on privacy policy?</label>
						<input type="checkbox" name="agree" value="YES">
					</div>

					<button class="btn btn-primary" type="button" id="save-btn">Save</button>
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

<script type="text/javascript">
	$('#save-btn').click(function (event) {
		event.preventDefault();

		var result = confirm("Are you sure?");

		if (result == true) {
			$('#my-form').submit();
		}
	});
</script>