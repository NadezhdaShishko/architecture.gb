<?php

use controllers\MainController;
use factory\BrowserGuiFactory;
use factory\MacGuiFactory;
use factory\WindowsGuiFactory;

spl_autoload_register(static function ($className) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require __DIR__ . DIRECTORY_SEPARATOR . $file . '.php';
});

echo '------------Windows--------------' . PHP_EOL;
$action = new MainController(new WindowsGuiFactory());
echo '--> Open modal window' . PHP_EOL;
$action->actionWindow();
echo '--> Click button' . PHP_EOL;
$action->actionClick();

echo '------------Mac OS--------------' . PHP_EOL;
$action = new MainController(new MacGuiFactory());
echo '--> Open modal window' . PHP_EOL;
$action->actionWindow();
echo '--> Click button' . PHP_EOL;
$action->actionClick();

echo '------------Browser Webkit--------------' . PHP_EOL;
$action = new MainController(new BrowserGuiFactory(BrowserGuiFactory::BROWSER_ENGINE_WEBKIT));
echo '--> Open modal window' . PHP_EOL;
$action->actionWindow();
echo '--> Click button' . PHP_EOL;
$action->actionClick();

echo '------------Browser IExplorer--------------' . PHP_EOL;
$action = new MainController(new BrowserGuiFactory(BrowserGuiFactory::BROWSER_ENGINE_IEXPLORER));
echo '--> Open modal window' . PHP_EOL;
$action->actionWindow();
echo '--> Click button' . PHP_EOL;
$action->actionClick();