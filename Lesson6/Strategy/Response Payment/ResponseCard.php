<?php


class ResponseCard implements IResponsePayment
{
    public function response()
    {
        echo "Card". PHP_EOL;
    }

}