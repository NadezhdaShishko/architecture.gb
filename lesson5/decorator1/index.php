<?php

spl_autoload_register(function ($classname) {
	require_once ($classname.'.php');
});

$decorator = new SMSDecorator(new SlackDecorator(new SMSDecorator(new BaseDecorator())));

$decorator = new SlackDecorator($decorator);
$decorator = new FacebookDecorator($decorator);

$decorator->send("Alert!");