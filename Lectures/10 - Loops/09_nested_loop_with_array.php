<?php

$arr = array( [11, 111, 1111] , [22, 222, 2222] , [33, 333, 3333] );

foreach ($arr as $ext_element) {
	foreach ($ext_element as $element) {
		echo $element . ' ';
	}
}


/*

[
	[11, 111, 1111],
	[22, 222, 2222],
	[33, 333, 3333]
]


outer step 1 = [11, 111, 1111]  --->  inner step 1,2,3 = 11, 111, 1111
outer step 2 = [22, 222, 2222]  --->  inner step 1,2,3 = 22, 222, 2222
outer step 3 = [33, 333, 3333]  --->  inner step 1,2,3 = 33, 333, 3333

*/

?>