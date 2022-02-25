<?php

$var = 5;

# normal
# $var = $var + 1;

# assignment operators
# $var += 1;

# post-icrement and pre-increment as the same
$var++;
++$var;

# post-icrement and pre-increment not as the same
$new_var = ++$var;	# new_var = 6
$new_var = $var++;	# new_var = 5

# example
$v = 5;
$r = $v++ + 2 - 1 + ++$v;	# 13


?>