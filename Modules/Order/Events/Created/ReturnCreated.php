<?php
namespace Plenty\Modules\Order\Events\Created;

use Plenty\Modules\Order\Events\OrderCreated;
use Plenty\Modules\Order\Models\Order;

/**
 * An event class fired after a new returns is created.
 */
abstract class ReturnCreated extends \Plenty\Modules\Order\Events\OrderCreated 

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