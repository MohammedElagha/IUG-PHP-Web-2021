<?php

// > < >= <= == != === !==

$int1 = 55;
$int2 = 14;

if ($int1 == $int2) {
	echo "YES";
}

#########################

$str1 = "Ali";
$str2 = "ali";

if ($str1 < $str2) {
	echo "STR YES";
}

#########################

$int1 = 55;
$int2 = "55";

if ($int1 == $int2) {
	echo " T YES";
}

if ($int1 != $int2) {
	echo " T YES";
}

if ($int1 === $int2) {
	echo " T YES";
}

if ($int1 !== $int2) {
	echo " T YES";
}

?>