<?php
spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

$receiver = new TextReceiver();
$copyCommand = new CopyCommand($receiver);
$cutCommand = new CutCommand($receiver);
$pasteCommand = new PasteCommand($receiver);

$invoker = new Invoker();
$result = $invoker->action($copyCommand);
$result = $invoker->action($cutCommand);
$result = $invoker->action($pasteCommand);
$result = $receiver->undo();