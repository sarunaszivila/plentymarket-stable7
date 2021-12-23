<?php
namespace Plenty\Modules\Order\Payment\Contracts;

use Carbon\Carbon;
use Plenty\Modules\Order\Exceptions\OrderUndefinedTypeException;
use Plenty\Modules\Order\Models\Order;

/**
 * The OrderPaymentRepositoryContract is the interface for the order payment repository. This interface allows you to update the paid amount of orders.
 */
interface OrderPaymentRepositoryContract 
{

	/**
	 * Add a given paid amount to the already existing paid amount of an order.
	 */
	public function addPaidAmount(
		int $orderId, 
		float $paidAmount, 
		string $currency = null, 
		Carbon $date = null, 
		array $options = []
	):Order;

	/**
	 * Overwrite already existing paid amount of an order with a given paid amount.
	 */
	public function overwritePaidAmount(
		int $orderId, 
		float $paidAmount, 
		string $currency = null, 
		Carbon $date = null, 
		array $options = []
	):Order;

}