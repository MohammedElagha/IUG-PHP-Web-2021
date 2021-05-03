<?php

$budget = 800;
$price = 80;

if ($budget >= $price) {
	echo "Purchase";
}

###########################

/*
	1. price > 50
	2. price <= 100
*/

if ($price > 50) {
	if ($price <= 100) {
		echo "Purchase";
	}
}


if ($price > 50 && $price <= 100) {
	echo "Purchase";
}

###########################

# Nestal, Nescafe

$product = "WakWak";

if ($product == 'Nestal' || $product == 'Nescafe') {

}

###########################

if (($product == 'Nestal' || $product == 'Nescafe') && ($price > 50 && $price <= 100)) {

}

?>