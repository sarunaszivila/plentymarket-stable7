<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Events;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\PaymentPolicy;

/**
 * A base event class for all payment policy events. Each payment policy events expects an PaymentPolicy model.
 */
abstract class PaymentPolicyEvent 
{

	public function __construct(
		PaymentPolicy $paymentPolicy
	)
	{
		return null;
	}

	/**
	 * Get the PaymentPolicy instance.
	 */
	public function getPaymentPolicy(
	):PaymentPolicy
	{
		return null;
	}

}