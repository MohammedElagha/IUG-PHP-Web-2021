<?php

# assign value to variable
$var = 5;

# assign variable to variable
$var2 = $var;

# add one to variable value
$var = $var + 1;

# add one to variable value (using assignment operator)
$var += 1;

# multiply variable value by 2 (using assignment operator)
$var *= 2;

#examples:
#1
$v = 5;
$v = $v + (3 * 4);	#origin
$v += (3 * 4);		# with operators

#2
$v1 = 4;
$v2 = 3;
$v1 = $v1 + $v2 + $v1 * 2;	#origin
$v1 += $v2 + $v1 * 2;		# with operators

/*
allowed operators in assignment:
+ - * / %
*/

?>