<?php


class QiwiPayment extends Payment
{
    public function pay($amount){}

    public function QiwiPayment() {
        $this->requestStrategy = new RequestQiwi();
        $this->responseStrategy = new ResponseQiwi();
    }
}