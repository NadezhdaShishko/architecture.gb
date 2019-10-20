<?php


class shoppingCart
{
    public $amount = 0;

    public function __construct($amount = 0) {
        $this->amount = $amount;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setAmount($amount = 0) {
        $this->amount = $amount;
    }

    public function payAmount()
    {
        if($this->amount > 500 && $this->amount < 1000) {
            $payment = new payByYM();
        } else if($this->amount > 1001 && $this->amount < 1500) {
            $payment = new payByCC();
        } else if($this->amount >= 1500) {
            $payment = new payByWM();
        } else {
            $payment = new payByQiwi();
        }

        $payment -> pay($this->amount);
    }
}