<?php
// index.php

require_once 'Car.php';
require_once 'Truck.php';


$truck1 = new Truck('red',2,'fuel',100);
$truck2 = new Truck('black',2,'electric',150);

$truck1->forward();
$truck2->forward();

$truck1->brake();
$truck2->brake();

?>
