<?php
namespace Plenty\Modules\Order\Payment\Events;

use Plenty\Exceptions\ValidationException;

/**
 * The event is triggered after the order is placed within the manual order creation.
 */
abstract class ManualOrderExecutePayment 
{

	const RETURN_TYPE_ERROR = 'error';

	const RETURN_TYPE_CONTINUE = 'continue';

	abstract public function setType(
		string $type
	):ManualOrderExecutePayment;

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
	):ManualOrderExecutePayment;

	/**
	 * Gets the value of the content type.
	 */
	abstract public function getValue(
	):string;

	/**
	 * Set the order id.
	 */
	abstract public function setOrderId(
		int $orderId
	):ManualOrderExecutePayment;

	/**
	 * Gets the order id.
	 */
	abstract public function getOrderId(
	):int;

	abstract public function getAdditionalData(
	):array;

	abstract public function setAdditionalData(
		array $additionalData
	):ManualOrderExecutePayment;

}