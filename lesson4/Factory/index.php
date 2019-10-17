test<?php

require 'Logistic/Logistc.php';
require 'Logistic/RoadLogistic.php';
require 'Logistic/ShipLogistic.php';

require 'Product/Transport.php';
require 'Product/Car.php';
require 'Product/Ship.php';

function testFactory(Logistc $logistic) {

	return $logistic->startDrlivery();

}

testFactory(new RoadLogistic());