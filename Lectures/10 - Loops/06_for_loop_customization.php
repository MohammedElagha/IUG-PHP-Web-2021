<?php

# 1 -> 10

for ($i = 1 ; $i <= 10 ; $i++) {
	if ($i % 2 == 0) {
		echo $i . ' ';
	}
}

for ($i = 2, $j = 1 ; $i <= 10 ; $i = $i+2, $j++) {
	echo $j . ' ';
}

?>