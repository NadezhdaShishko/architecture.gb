<?php


class PasteCommand implements ICommand
{
    protected $receiver;

    public function __construct(TextReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->paste();
    }

    public function unExecute()
    {
        $this->receiver->undo();
    }

}