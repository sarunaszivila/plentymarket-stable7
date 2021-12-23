<?php
namespace Plenty\Modules\Order\Events;

use Plenty\Modules\Order\Models\Order;

/**
 * An event class will be fired after a payment is assigned and if the order is overpaid.
 */
abstract class OrderOverpaid extends \Plenty\Modules\Order\Events\OrderPaidEvent 

{

	/**
	 * OrderEvent constructor.
	 */
	abstract public function __construct(
		Order $order
	);

	/**
	 * Get the order instance.
	 */
	abstract public function getOrder(
	):Order;

}