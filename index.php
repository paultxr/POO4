<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Motorway.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

var_dump(Car::ALLOWED_ENERGIES);

$bike = new Bicycle('blue', 1);
$cars = new Car ('blue',5,'diesel');
$truck = new Truck(100, 25, 'yellow', 3, "fuel");
$tesla = new Car('black', 4, 'diesel');
$ferrari = new Car('red', 2, 'gas');
$road = new Motorway;
$way = new ResidentialWay;

$road->addVehicle($tesla);
$road->addVehicle($ferrari);

$way->addVehicle($truck);

$cars->setParkBrake(true);
var_dump($cars);
echo $cars->start();
var_dump($cars);
echo $cars->start();
var_dump($cars);

//echo $cars->getParkBrake();//

  

/*print_r($road);
var_dump($way);


echo $bike->forward();
var_dump($bike);
var_dump($cars);
echo $truck->isFull();
var_dump($truck);


echo $bike->forward();
echo $bike->getCurrentSpeed();
echo $bike->brake();
echo $bike->getCurrentSpeed();


echo "<br>";
echo "<br>";

echo $cars->forward();
echo $cars->getCurrentSpeed();
echo $cars->brake();
echo $cars->getCurrentSpeed();*/





