<?php

include_once('../../Controller/Classes/StudentController.php');
include_once('../Classes/AllStudentsView.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
</head>
<body>

	<?php

	$StudentController = new StudentController;
	echo $StudentController->get_all_students();

	?>

</body>
</html>