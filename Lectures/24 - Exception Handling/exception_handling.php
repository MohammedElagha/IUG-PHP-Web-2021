<?php

try {

	echo 'line 1<br>';

	echo 'line 2<br>';

	// echo 'line 3<br>';
	throw new Exception();

	echo 'line 4<br>';

} catch (Exception $e) {
	echo 'exception<br>';
	echo $e->getMessage();
}

echo 'outside<br>';

?>