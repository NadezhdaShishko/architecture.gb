<?php

class FacebookDecorator implements INotifier
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
//        echo "Facebook: ";
        return $this->wrappee = $this->send($message);
    }
}