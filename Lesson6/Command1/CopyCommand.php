<?php


class CopyCommand extends Command
{
    protected $receiver;
    protected $start;
    protected $finish;

    /**
     * CopyCommand constructor.
     * @param $receiver
     * @param $start
     * @param $finish
     */
    public function __construct(TextReceiver $receiver, $start, $finish)
    {
        $this->receiver = $receiver;
        $this->start = $start;
        $this->finish = $finish;
    }

    public function execute()
    {
        $this->receiver->copy($this->start, $this->finish);
    }

    public function unExecute()
    {
        $this->receiver->undo();
    }

}