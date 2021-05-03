<?php

# SDEV, MOBC, WDMM

$course_number_prefix = 'MOBC';

if ($course_number_prefix == 'MOBC') {
	echo "Department of Mobile Computing";
}
else if ($course_number_prefix == 'SDEV') {
	echo "Department of Software Development";
}
else if ($course_number_prefix == 'WDMM') {
	echo "Department of Multimedia";
}
else {
	echo "Error";
}

###############################################

switch ($course_number_prefix) {
	case 'MOBC':
		echo "Department of Mobile Computing";
		break;
	case 'SDEV':
		echo "Department of Software Development";
		break;
	case 'WDMM':
		echo "Department of Multimedia";
		break;
	
	default:
		echo "Error";
		break;
}

?>