<?php

// float to int
$float_var = 14.25;
$int_var = intval($float_var);
var_dump($int_var);

// int to float
$int_var2 = 15;
$float_var2 = floatval($int_var2);
var_dump($float_var2);

// any to str
$var = 150.456;
$str_var = strval($var);
var_dump($str_var);

?>