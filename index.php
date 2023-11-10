<?php
include "Car.php";
include "Cat.php";


// $myCar = new Car("Renault");

// $myCar2 = new Car("Microsoft vehicle");

// Car::makeNoise();

// $myCar->makeNoise();


// echo "<br><br><br>";
$cat = new Cat;
$cat2 = new Cat;

$cat->name = "Mincis";
$cat2->name = "Brincis";

$cat->birthday();
echo $cat->age. " age";

echo "<br><br><br>";

Cat::meow();


?>