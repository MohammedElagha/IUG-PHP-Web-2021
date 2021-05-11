<!DOCTYPE html>
<html>
<body>

<?php

# date
# Y-m-d

$date = Date('2019-05-15');
// echo $date;

################################

# time
# H:i:s

$time = Date('23:55:30');
// echo $time;

################################

# datetime
# Y-m-d H:i:s

$datetime = Date('20-11-01 05:33:28');
// echo $datetime;

################################

$current_date = Date('Y-m-d');
$current_time = Date('H:i');
$current_datetime = Date('Y/m/d H:i:s');

# echo $current_datetime;

################################

/*

DB type
date -> Y-m-d
time -> H:i:s
datetime, timestamp -> Y-m-d H:i:s

*/

################################

$current_date = Date('Y-m-d');
$current_time = Date('H:i');
$current_datetime = Date('Y/m/d H:i:s');

# echo strtotime($current_datetime);

################################

$first = '2020-05-08';
$second = '2021-01-06';

if (strtotime($first) > strtotime($second)) echo $first;
else echo $second;

?>

</body>
</html>
