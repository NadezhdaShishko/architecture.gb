<?php


class Order
{
	protected $product;
	protected $mailer;
	protected $delivery;


	public function __construct(OrderBuilder $orderBuilder)
	{
		$this->product = $orderBuilder->getProduct();
		$this->mailer = $orderBuilder->getMailer();
		$this->delivery = $orderBuilder->getDelivery();
	}


}