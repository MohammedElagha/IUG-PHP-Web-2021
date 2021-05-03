<?php

$str1 = 'Hello.';
$str2 = "My name is Mohammed.";
$str3 = 'I am teacher';

$str = $str1 . ' ' . $str2 . ' ' . $str3;

############################################

$price = 15.14;

$str = 'Price is ' . $price;
$str = 'Price is ' . strval($price);
$str = strval($price) . ' $ price';

echo $str;

?>