<?php 

include './Interfaces/FuelLoadable.php';
include './Models/Vehicle.php';
include './Models/Plane.php';
include './Models/Car.php';

$plane = new Plane('Boeing', '737');
$plane->getFuel();

echo '<br>';

$car = new Car('TOGG', 'T10X', true);
$car->getFuel();


echo '<br>';

$car2 = new Car('Opel', 'Astra', false);
$car2->getFuel();

$vehicles = [$plane, $car, $car2];

echo '<br>';
foreach($vehicles as $vehicle) {
    $vehicle->getFuel();
}