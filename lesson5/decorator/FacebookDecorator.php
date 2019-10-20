<?php

class FacebookDecorator extends Decorator
{
    /**
     * @param $message
     * @return string
     */
    public function send($message)
    {
        return "Facebook: " . parent::send($message);
    }
}