<?php

spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

$circleAdapter = new CircleAdapter(new CircleAdaptee());
$circleAdapter->circle(100);

$squareAdapter  = new SquareAdapter(new SquareAdaptee());
$squareAdapter->square(10);
