<?php


class TextFirst implements IText
{
protected $objText;


	public function __construct(IText $objText)
	{
		$this->objText = $objText;
	}

	public function show()
	{
		echo 'First';
		$this->objText->show();
	}


}