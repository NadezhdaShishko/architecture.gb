<?php

class TextSpace implements IText
{
protected $objText;


	public function __construct(IText $objText)
	{
		$this->objText = $objText;
	}

	public function show()
	{
		echo ' ';
		$this->objText->show();
	}

}