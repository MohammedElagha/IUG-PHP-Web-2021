<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>FIRST</h1>

	<p>The sum of 5 and 6 = <?php echo getSum(5,6); ?> </p>
</body>
</html>

<?php

function getSum ($a, $b) {
	return $a + $b;
}

?>