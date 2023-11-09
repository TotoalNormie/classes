<?php
include "Car.php";


$myCar = new Car("Renault");

$myCar2 = new Car("Microsoft vehicle");

Car::makeNoise();

$myCar->makeNoise();



?>