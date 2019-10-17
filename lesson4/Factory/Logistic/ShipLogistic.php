<?php


class ShipLogistic extends Logistc
{
	public function createTransport(): Transport
	{
		return new Ship();
	}


}