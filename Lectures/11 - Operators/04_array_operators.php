<?php

# Union , comparison

$arr1 = ["A" => 54 , "B" => 4];
$arr2 = ["C" => 48564, 'D' => "O;la"];

$u_arr = $arr1 + $arr2;

# print_r($u_arr);


######################################

# Indexed - Comparison (equality)

$i_arr1 = [1, 2, 3];
$i_arr2 = [1, 2, 3];
if ($i_arr1 == $i_arr2) {
	echo "1 - YES";
} 

$i2_arr1 = [2, 1, 3];
$i2_arr2 = [1, 2, 3];
if ($i2_arr1 == $i2_arr2) {
	echo "2 - YES";
} 

######################################

# Assocc - Comparison (equality , keys and values)

$ac1_arr1 = ["A" => 11 , "B" => 12];
$ac1_arr2 = ["A" => 11 , "B" => 12];
if ($ac1_arr1 == $ac1_arr2) {
	echo "3 - YES";
}

$ac2_arr1 = ["B" => 12 , "A" => 11];
$ac2_arr2 = ["A" => 11 , "B" => 12];
if ($ac2_arr1 == $ac2_arr2) {
	echo "4 - YES";
}
if ($ac2_arr1 === $ac2_arr2) {
	echo "5 - YES";
}

?>