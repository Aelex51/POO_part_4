<?php
require 'Vehicle.php';
require 'Bicycle.php';
require 'MotorWay.php';
require 'PedestrianWay.php';
require 'ResidentialWay.php';
require 'Bike.php';
require 'Skateboard.php';
require 'Car.php';


    /*quete 4*/

$motorway = new MotorWay(4, 130);
$pedestrianway = new PedestrianWay(1, 10);
$residentialway = new ResidentialWay(2, 50);

$skateboard = new Skateboard('green', 0);
$car = new Car('green', 4, 'electric');
$bike = new Bicycle('blue', 1);
$bike->setCurrentSpeed(270);
$cbr = new Bike('green', 1);

/*echo $car->start();*/

try{
    $car->start();
} catch (Exception $e){
    $car->setParkBrake(false);
} finally{
    echo 'Ma voiture roule comme un donut';
}


