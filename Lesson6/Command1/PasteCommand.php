<?php


class PasteCommand extends Command
{
    protected $receiver;
    protected $text;

    /**
     * PasteCommand constructor.
     * @param $receiver
     * @param $text
     */
    public function __construct(TextReceiver $receiver, $text)
    {
        $this->receiver = $receiver;
        $this->text = $text;
    }

    public function execute()
    {
        $this->receiver->paste($this->text);
    }

    public function unExecute()
    {
        $this->receiver->undo();
    }

}