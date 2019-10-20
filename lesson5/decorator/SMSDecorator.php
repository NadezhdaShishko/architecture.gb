<?php


class SMSDecorator extends Decorator
{
    /**
     * @param $message
     * @return string
     */
    public function send($message)
    {
        return "SMS: " . parent::send($message);
    }
}