<?php

# Indexed : sort, rsort
# Assocc  : asort, ksort, arsort, krsort

# ASC , DESC

###########################################

# Indexed

$i_arr = [15, 11, 1, 7, 8, 88, 2, 1, 6, 99];

# sort($i_arr);
# rsort($i_arr);

# print_r($i_arr);

###########################################

# Assocc

$a_arr = ["A" => 55 , "D" => 12 , "C" => 90 , "B" => 1];

asort($a_arr);

print_r($a_arr);

?>