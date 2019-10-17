<?php

class TextSecond implements IText
{
protected $objText;


	public function __construct(IText $objText)
	{
		$this->objText = $objText;
	}

	public function show()
	{
		echo 'Second';
		$this->objText->show();
	}


}