<?php


class Product implements IObserver
{

    public function __construct()
    {
        HandHunter::getInstance()->register($this);
    }

    public function notify($obj)
    {
        if($obj instanceof HandHunter) {
            echo "Появилась вакансия РНР программиста".PHP_EOL;
        }
    }

}