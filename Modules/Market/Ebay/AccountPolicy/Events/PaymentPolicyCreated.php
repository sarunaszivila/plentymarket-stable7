<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Events;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\PaymentPolicy;

/**
 * An event class fired after a new payment policy is created.
 */
abstract class PaymentPolicyCreated extends \Plenty\Modules\Market\Ebay\AccountPolicy\Events\PaymentPolicyEvent 

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