<?php
namespace Plenty\Modules\Order\Payment\Events;

use Plenty\Exceptions\ValidationException;

/**
 * The event is triggered before the order is placed within the manual order creation.
 */
abstract class ManualOrderPreparePayment 
{

	const RETURN_TYPE_HTML = 'htmlContent';

	const RETURN_TYPE_ERROR = 'error';

	const RETURN_TYPE_CONTINUE = 'continue';

	abstract public function setType(
		string $type
	):ManualOrderPreparePayment;

	/**
	 * Gets the content type.
	 */
	abstract public function getType(
	):string;

	/**
	 * Set the value of the content type.
	 */
	abstract public function setValue(
		string $value
	):ManualOrderPreparePayment;

	/**
	 * Gets the value of the content type.
	 */
	abstract public function getValue(
	):string;

	/**
	 * Set the order data.
	 */
	abstract public function setOrderData(
		array $orderData
	):ManualOrderPreparePayment;

	/**
	 * Gets the order data.
	 */
	abstract public function getOrderData(
	):array;

}