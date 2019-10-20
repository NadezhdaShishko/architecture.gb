<?php


class Decorator implements INotifier
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
	    return $this->wrappee = $this->send($message);
	}

}