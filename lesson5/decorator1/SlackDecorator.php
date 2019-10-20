<?php

class SlackDecorator implements INotifier
{
    /**
     * @var INotifier
     */
    protected $wrappee;

    public function __construct(INotifier $wrappee)
    {
        $this->wrappee = $wrappee;
    }

    public function send($message)
    {
        echo "Slack: ";
//        return $this->wrappee = $this->send($message);
    }
}