<?php


class payByQiwi implements IPayStrategy
{
    private $phone;
    private $token;
    private $url;

//    function __construct($phone, $token) {
//        $this->phone = $phone;
//        $this->token = $token;
//        $this->url   = 'https://edge.qiwi.com/';
//    }

    public function pay($amount = 0)
    {
        echo "Paying ". $amount. " using Qiwi". PHP_EOL;
    }
}