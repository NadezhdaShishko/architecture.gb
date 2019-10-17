<?php
spl_autoload_register(function ($classname) {
	require_once ($classname.'.php');
});

$comp = new ComputerFacade(new Memory(), new HardDrive(), new CPU());

$comp->start();

print_r($comp);