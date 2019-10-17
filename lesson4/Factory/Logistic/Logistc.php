<?php


abstract class Logistc
{
public function startDrlivery() {
	$deliveryMethod = $this->createTransport();
	echo "Начинаем доставку!".PHP_EOL;

	$deliveryMethod -> deliver();
}
abstract protected function createTransport() : Transport;
}