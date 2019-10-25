<?php


class WMPayment extends Payment
{
    public function pay($amount){}

    public function WMPayment() {
        $this->requestStrategy = new RequestWM();
        $this->responseStrategy = new ResponseWM();
    }
}