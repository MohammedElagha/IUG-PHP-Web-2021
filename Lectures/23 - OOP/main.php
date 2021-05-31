<?php


include_once('entities/Car.php');

$car = new Car("X5");
$car->brand = "BMW";
// $car->model = "X5";
$car->set_year(2015);

echo $car->brand;
echo $car->get_year();


?>