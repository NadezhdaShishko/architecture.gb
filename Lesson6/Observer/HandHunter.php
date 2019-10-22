<?php


class HandHunter
{
    private $observers = [];
    private $handHunterData;
    private static $instance = null;


    private function __construct(){}
    private function __wakeup(){}
    private function __clone(){}

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function getHandHunterData()
    {
        return $this->handHunterData;
    }

    /**
     * @param mixed $handHunterData
     */
    public function setHandHunterData($handHunterData): void
    {
        $this->handHunterData = $handHunterData;
        $this->notifyObservers();
    }

    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->notify($this);
        }
    }

    public function register(IObserver $observer) {
        $this->observers[] = $observer;
    }
}