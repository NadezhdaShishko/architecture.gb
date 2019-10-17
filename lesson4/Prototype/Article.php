<?php


class Article
{
	public $title;
	public $pageSize;

	public function __construct($title, $pageSize)
	{
		$this->title = $title;
		$this->pageSize = $pageSize;
	}

	public function getInfo()
	{

	}

	public function myClone($pageSize = 0)
	{

		$instance = clone($this);

		if ($pageSize > 0) {
			$instance->pageSize = $pageSize;
		}

		return $instance;

	}


}