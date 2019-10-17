<?php

spl_autoload_register(function ($classname) {
	require_once ($classname.'.php');
});

$main = new Composite('main');
$main->add(new Leaf('Узел А'));
$main->add(new Leaf('Узел B'));

$temp = new Composite('temp');
$temp->add(new Leaf('Узел А от темп'));
$temp->add(new Leaf('Узел B от темп'));

$main->add($temp);

$main->display();
$main->remove($temp);

$main->display();
