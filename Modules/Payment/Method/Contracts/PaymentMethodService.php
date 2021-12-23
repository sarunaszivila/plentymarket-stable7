<?php
namespace Plenty\Modules\Payment\Method\Contracts;


/**
 * Deprecated: The payment method service
 */
abstract class PaymentMethodService 
{

	/**
	 * Is this payment method searchable in the backend?
	 */
	abstract public function isBackendSearchable(
	):bool;

	/**
	 * Is this payment method active in the backend?
	 */
	abstract public function isBackendActive(
	):bool;

	/**
	 * Get the backend name of the payment method
	 */
	abstract public function getBackendName(
		string $lang
	):string;

	/**
	 * Can this payment method handle subscriptions?
	 */
	abstract public function canHandleSubscriptions(
	):bool;

}