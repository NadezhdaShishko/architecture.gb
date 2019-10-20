<?php
spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

$cart = new shoppingCart(499);
$cart->payAmount();

$cart = new shoppingCart(501);
$cart->payAmount();

$cart = new shoppingCart(1020);
$cart->payAmount();

$cart = new shoppingCart(1500);
$cart->payAmount();