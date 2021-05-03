<?php

# Indexed Array

$arr = ["E1", "E2", "E3", "E4"];

foreach ($arr as $element) {
	echo $element;
}


#################################


# Associative Array

$assoc_arr = ["N1" => "Value 1", "N2" => "Value 2", "N3" => "Value 3"];

foreach ($assoc_arr as $key => $value) {
	echo $key;
	echo $value;
}

?>