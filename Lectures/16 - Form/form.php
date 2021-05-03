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

		<?php

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			# exist, not empty, format
			# required = exist + not empty

			# exist -> isset
			# not empty -> !empty
			# required -> isset + !empty OR !empty


			if (isset($_POST['name']) && isset($_POST['birth_date']) && isset($_POST['email']) && isset($_FILES['personal_image']) && isset($_FILES['certificates'])) {
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




						# upload file

						# name (client name), size, tmp_name, type

						$file_name = $_FILES['personal_image']['name'];		# img4784-5745sfs.png
						$file_size = $_FILES['personal_image']['size'];
						$file_tmp = $_FILES['personal_image']['tmp_name'];
						$file_type = $_FILES['personal_image']['type'];
						$file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

						$file_new_name = strval(time() + rand(1, 10000000)) . ".$file_ext";
						$upload_path = 'uploads/' . $file_new_name;
						move_uploaded_file($file_tmp, $upload_path);

						if (file_exists($upload_path)) {

						}




						# upload multiple files

						$certificates = $_FILES['certificates'];
						$loop_len = count($certificates['name'])

						for ($i = 0 ; $i < $loop_len , $i++) {
							$file_name = $_FILES['certificates']['name'][$i];		# img4784-5745sfs.png
							$file_size = $_FILES['certificates']['size'][$i];
							$file_tmp = $_FILES['certificates']['tmp_name'][$i];
							$file_type = $_FILES['certificates']['type'][$i];
							$file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

							$file_new_name = strval(time() + rand(1, 10000000)) . ".$file_ext";
							$upload_path = 'uploads/' . $file_new_name;
							move_uploaded_file($file_tmp, $upload_path);

							if (file_exists($upload_path)) {

							}
						}


						/*
							["name" => "imgfilekl56465.png" , "size" => 4575 , "type" => "image/png" , "tmp_name" => "ooigusuognh"]



							[
								["name" => "kljsdfsf.jpg" , "size" => 4754 , "type" => "image/jpg" , "tmp_name" => "sfsfsdf"],
								["name" => "report254154.pdf" , "size" => 4785687 , "type" => "file/pdf" , "tmp_name" => "pphorusoopr"],
								["name" => "midexamweb.doc" => "size" => 874646874687, "type" => "file/doc" , "tmp_name" => "jkhsdfjhsfd"]
							]

							$_FILES['certificates'][1]['name']

							#######################################

							[
								"name" => ["kljsdfsf.jpg" , "report254154.pdf" , "midexamweb.doc"],
								"size" => [4754 , 4785687 , 874646874687],
								"type" => ["image/jpg" , "file/pdf" , "file/doc"],
								"tmp_name" => ["sfsfsdf" , "pphorusoopr" , "jkhsdfjhsfd"]
							]

							$_FILES['certificates']['name'][1]
						*/
					}
				}
			}

			# processing ...

			$status = ture;

			if ($status) {
				echo '<div class="row"><div class="col-12"><div class="alert alert-success">DONE</div></div></div>';
			} else {
				echo '<div class="row"><div class="col-12"><div class="alert alert-danger">FAILED</div></div></div>';
			}

			
		}

		?>


		<div class="row">
			<div class="col-12">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?id=564544'; ?>" method="POST" id="my-form" enctype="multipart/form-data">
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
						<label for="personal_image">Student Personal Image</label>
						<input type="file" name="personal_image" class="form-control">
					</div>

					<div class="form-group">
						<label for="personal_image">Certificates</label>
						<input type="file" name="certificates[]" class="form-control" multiple>
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