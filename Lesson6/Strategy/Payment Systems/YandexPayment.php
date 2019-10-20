<?php


class YandexPayment extends Payment
{
    public function pay($amount){}

    public function YMPayment() {
        $this->requestStrategy = new RequestYM();
        $this->responseStrategy = new ResponseYM();
    }
}