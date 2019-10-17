<?php


class RoadLogistic extends Logistc
{
	public function createTransport(): Transport
	{
		return new Car();
	}


}