<?php

spl_autoload_register(function ($classname) {
	require_once ($classname.'.php');
});

$decorator = new TextFirst(new TextSpace(new TextFirst(new TextEmpty())));

$decorator = new TextSpace($decorator);
$decorator = new TextSecond($decorator);

$decorator->show();