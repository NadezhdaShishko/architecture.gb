<?php


class payByYM implements IPayStrategy
{
    private $phone;

    public function pay($amount = 0)
    {
        echo "Paying ". $amount. " using YandexMoney". PHP_EOL;
    }
}