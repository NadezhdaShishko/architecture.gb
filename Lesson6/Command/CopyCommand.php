<?php


class CopyCommand implements ICommand
{
    protected $receiver;

    public function __construct(TextReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->copy();
    }

    public function unExecute()
    {
        $this->receiver->undo();
    }

}