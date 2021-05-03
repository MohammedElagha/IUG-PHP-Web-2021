<?php

$str1 = "Ali";
$str2 = "ali";

if ($str1 == $str2) {
	echo "YES";
}

if (strcasecmp($str1, $str2) == 0) {
	echo "YES CASE";
}

?>