<?php
namespace Plenty\Modules\Order\Payment\Method\Contracts;

use Plenty\Modules\Order\Payment\Method\Models\PaymentMethod;

/**
 * Repository Contract for PaymentMethod
 */
interface PaymentMethodRepositoryContract 
{

	/**
	 * Gets a list of payment methods
	 */
	public function getPaymentMethods(
		int $countryId, 
		int $plentyId = null, 
		string $lang = "de"
	):array;

	/**
	 * Activate a legacy payment method.
	 */
	public function activatePaymentMethod(
		int $id
	):PaymentMethod;

}