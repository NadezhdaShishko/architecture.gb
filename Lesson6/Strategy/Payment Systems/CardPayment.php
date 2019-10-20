<?php


class CardPayment extends Payment
{

    public function pay($amount){}

    public function CardPayment() {
        $this->requestStrategy = new RequestCard();
        $this->responseStrategy = new ResponseCard();
    }
}