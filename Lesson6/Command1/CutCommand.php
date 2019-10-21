<?php


class CutCommand extends Command
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
        $this->receiver->cut($this->start, $this->finish);
    }

    public function unExecute()
    {
        $this->receiver->undo();
    }

}