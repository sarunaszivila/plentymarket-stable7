<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Events;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\FulfillmentPolicy;

/**
 * An event class fired after a new fulfillment policy is updated.
 */
abstract class FulfillmentPolicyUpdated extends \Plenty\Modules\Market\Ebay\AccountPolicy\Events\FulfillmentPolicyEvent 

{

	public function __construct(
		FulfillmentPolicy $fulfillmentPolicy
	)
	{
		return null;
	}

	/**
	 * Get the FulfillmentPolicy instance.
	 */
	public function getFulfillmentPolicy(
	):FulfillmentPolicy
	{
		return null;
	}

}