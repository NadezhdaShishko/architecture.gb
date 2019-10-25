<?php


class CutCommand implements ICommand
{
    protected $receiver;

    public function __construct(TextReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->cut();
    }

    public function unExecute()
    {
        $this->receiver->undo();
    }

}