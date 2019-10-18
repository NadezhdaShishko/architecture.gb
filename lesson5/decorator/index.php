<?php

spl_autoload_register(function ($classname) {
	require_once ($classname.'.php');
});

$decorator = new SMSDecorator(new SlackDecorator(new SMSDecorator(new BaseDecorator())));

$decorator1 = new SlackDecorator($decorator);
$decorator2 = new FacebookDecorator($decorator1);

$decorator->send("Alert!");