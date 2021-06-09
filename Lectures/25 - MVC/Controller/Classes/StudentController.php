<?php


include_once('../../Model/Student.php');
include_once('../../View/Classes//AllStudentsView.php');

class StudentController {

	public function get_all_students () {
		include_once('../../includes/db_connection.php');

		$query = "select id, name, email, gpa from students";
		$result = mysqli_query($connection, $query);

		$students = [];

		if ($result) {
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$student = new Student;
					$student->name = $row['name'];
					$student->email = $row['email'];
					$student->gpa = $row['gpa'];

					array_push($students, $student);
				}
			}
		}

		$AllStudentsView = new AllStudentsView;
		$AllStudentsView->students = $students;
		return $AllStudentsView->output();
	}

}

?>