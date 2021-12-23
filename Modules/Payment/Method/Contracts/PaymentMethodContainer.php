<?php
namespace Plenty\Modules\Payment\Method\Contracts;


/**
 * The payment method container
 */
interface PaymentMethodContainer 
{

	/**
	 * Registers a payment method
	 */
	public function register(
		string $paymentKey, 
		 $paymentMethodServiceClass, 
		array $rebuildEventClassesList
	);

	/**
	 * Checks registered payment method
	 */
	public function isRegistered(
		string $paymentKey
	):bool;

}