<?php

require 'Order.php';
require 'OrderBuilder.php';

require 'parts/Delivery.php';
require 'parts/Product.php';
require 'parts/Mailer.php';

function testBuilder(Product $product, Delivery $delivery, Mailer $mailer) {
	$orderBuilder = new OrderBuilder();
	$orderBuilder -> setDelivery($delivery);
	$orderBuilder -> setMailer($mailer);
	$orderBuilder -> setProduct($product);

	$order = $orderBuilder->build();
	return $order;

}

