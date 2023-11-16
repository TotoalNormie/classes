<?php

include_once "Lemon.php";
include_once "Tangerine.php";
include_once "Apple.php";
include_once "TableClass.php";


$table = new Table(0.95, 1.6);

$lemon = new Lemon("Yellow", 58, 14, 2.65, 1, "lightyellow");
$tangerine = new Tangerine("Orange", 88, 12, 2.65, 1, "lightorange");
$apple = new Apple("Red", 189, 13, 2.01, 1, "lightyellow");
echo "<pre>";
$lemon->ripen();
echo "\n";
$tangerine->ripen();
echo "\n";
$apple->ripen();
echo "\n";

$table->fruits[] = $lemon;
$table->fruits[] = $tangerine;
$table->fruits[] = $apple;

print_r($table);

echo "</pre>";


?>