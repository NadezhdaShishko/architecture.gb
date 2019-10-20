<?php


class payByWM implements IPayStrategy
{
    private $phone;

    public function pay($amount = 0)
    {
        echo "Paying " . $amount . " using WebMoney" . PHP_EOL;
    }
}