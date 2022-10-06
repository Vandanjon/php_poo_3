<?php
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

$truckOne = new Truck('black', 3, 90);
$alfaromeo = new Car('red', 5, 180);
$seatCupra = new Car('green', 4, 400);
$bike = new Bicycle('blue', 12);
$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

echo 'MotorWay : ' . PHP_EOL;
echo $motorWay->addVehicle($alfaromeo) . PHP_EOL;
echo $motorWay->addVehicle($seatCupra) . PHP_EOL;
echo $motorWay->addVehicle($bike) . PHP_EOL;

echo 'ResidentialWay : ';
echo $residentialWay->addVehicle($truckOne) . PHP_EOL;

echo 'PedestrianWay : ';
echo $pedestrianWay->addVehicle($bike) . PHP_EOL;