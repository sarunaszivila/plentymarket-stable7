<?php
namespace Plenty\Modules\Order\Injection\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * Contract for injections on update.
 */
interface OrderInjectionOnUpdateContract 
{

	/**
	 * Manipulate the order data on update.
	 */
	public function handle(
		Order $order, 
		array $data
	):array;

}