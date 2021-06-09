<?php

class AllStudentsView  {

	public $students;

	public function output () {
		$html = "<table>";

		foreach ($this->students as $student) {
			$html .= "<tr>";

			$html .= "<td>";
			$html .= $student->name;
			$html .= "</td>";

			$html .= "<td>";
			$html .= $student->email;
			$html .= "</td>";

			$html .= "<td>";
			$html .= $student->gpa;
			$html .= "</td>";

			$html .= "</tr>";
		}

		$html .= "</table>";

		return $html;
	}
}

?>