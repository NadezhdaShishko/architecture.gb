<?php
spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

function testStrategy ()
{
    $payment = new CardPayment();
    $pay = $payment->getRequestStrategy();
    $pay = $payment->getResponseStrategy();
}

testStrategy();