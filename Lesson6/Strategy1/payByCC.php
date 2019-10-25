<?php


class payByCC implements IPayStrategy
{
    private $ccNum = '';
    private $ccType = '';
    private $cvvNum = '';
    private $ccExpMonth = '';
    private $ccExpYear = '';

//    function __construct($ccNum, $ccType, $cvvNum, $ccExpMonth, $ccExpYear) {
//        $this->ccNum = $ccNum;
//        $this->ccType = $ccType;
//        $this->cvvNum = $cvvNum;
//        $this->ccExpMonth = $ccExpMonth;
//        $this->ccExpYear = $ccExpYear;
//    }

    public function pay($amount = 0)
    {
        echo "Paying ". $amount. " using Credit Card". PHP_EOL;
    }
}