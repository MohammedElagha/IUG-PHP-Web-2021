<?php

# Get character by index
$str = "Hi, hello world! I'm developer";
# echo $str[10];	# w

########################

# echo strpos($str, '!');
echo substr($str, 0, strpos($str, '!')+1);


?>