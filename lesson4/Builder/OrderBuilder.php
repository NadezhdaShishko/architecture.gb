<?php


class OrderBuilder
{
protected $product;
protected $mailer;
protected $delivery;

public function build (): Order {
	//бизнес-логика
	return new Order();
}

	/**
	 * @return mixed
	 */
	public function getProduct()
	{
		return $this->product;
	}

	/**
	 * @param mixed $product
	 */
	public function setProduct($product)
	{
		$this->product = $product;
	}

	/**
	 * @return mixed
	 */
	public function getMailer()
	{
		return $this->mailer;
	}

	/**
	 * @param mixed $mailer
	 */
	public function setMailer($mailer)
	{
		$this->mailer = $mailer;
	}

	/**
	 * @return mixed
	 */
	public function getDelivery()
	{
		return $this->delivery;
	}

	/**
	 * @param mixed $delivery
	 */
	public function setDelivery($delivery)
	{
		$this->delivery = $delivery;
	}


}