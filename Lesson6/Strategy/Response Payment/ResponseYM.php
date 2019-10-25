<?php


class ResponseYM implements IResponsePayment
{
    public function response()
    {
        echo "YandexMoney". PHP_EOL;
    }

}