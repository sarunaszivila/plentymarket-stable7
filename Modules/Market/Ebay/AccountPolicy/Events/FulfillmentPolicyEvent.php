<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Events;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\FulfillmentPolicy;

/**
 * A base event class for all fulfillment policy events. Each fulfillment policy events expects an FulfillmentPolicy model.
 */
abstract class FulfillmentPolicyEvent 
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