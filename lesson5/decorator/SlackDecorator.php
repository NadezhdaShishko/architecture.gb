<?php

class SlackDecorator implements INotifier
{
    protected $message;

    public function __construct(INotifier $message)
    {
        $this->message = $message;
    }

    public function send($message)
    {
        echo 'Slack';
        $this->message->send($message);
    }
}