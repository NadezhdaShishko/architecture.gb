<?php
spl_autoload_register(function ($classname) {
    require_once($classname . '.php');
});

$product1 = new Product();
$product2 = new Product();

HandHunter::getInstance()->setHandHunterData('вакансия PHP');