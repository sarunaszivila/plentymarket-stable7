<?php
namespace Plenty\Modules\Webshop\Order\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * Create orders from the webshop
 */
interface OrderRepositoryContract 
{

	/**
	 * Generate order data from current basket and place the order.
	 */
	public function placeOrder(
	):Order;

	/**
	 * Create a return order for some items of an existing order.
	 */
	public function createReturnOrder(
		array $returnOrderData, 
		int $orderId = null
	):Order;

	/**
	 * Switch the payment method of an existing order.
	 */
	public function switchPaymentMethodForOrder(
		int $orderId, 
		int $paymentMethodId, 
		string $accessKey = ""
	):Order;

}