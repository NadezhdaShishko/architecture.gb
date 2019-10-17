<?php


class ComputerFacade
{
protected $memory;
protected $hardDrive;
protected $cpu;


	public function __construct(Memory $memory, HardDrive $hardDrive,CPU $cpu)
	{
		$this->memory = $memory;
		$this->hardDrive = $hardDrive;
		$this->cpu = $cpu;
	}

public function start() {
		$this -> cpu->run();

		$this->memory->load($this->memory->bootAddress, $this->hardDrive->readData());

		$this->cpu->powerOff();
}
}