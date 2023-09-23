<?php

include './Models/Vehicle.php';
include './Models/Plane.php';
include './Models/WarPlane.php';
include './Models/Car.php';


$plane1 =new Plane('Boeing', '737');
$plane1->moving();
$plane1->flying();


echo '<br>';
echo '<br>';
//$vehicle =new Vehicle('Bisiklet', 'X');
//$vehicle->moving();


echo '<br>';
echo '<br>';
$warPlane =new WarPlane('War Plane', 'Y');
$warPlane->moving();
$warPlane->flying();
$warPlane->throwBomb();

echo '<br>';
echo '<br>';

$car =new Car('TOGG', 'T10X');
$car->moving();