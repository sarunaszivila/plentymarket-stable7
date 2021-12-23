<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Events;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\ReturnPolicy;

/**
 * A base event class for all return policy events. Each return policy events expects an ReturnPolicy model.
 */
abstract class ReturnPolicyEvent 
{

	public function __construct(
		ReturnPolicy $returnPolicy
	)
	{
		return null;
	}

	/**
	 * Get the ReturnPolicy instance.
	 */
	public function getReturnPolicy(
	):ReturnPolicy
	{
		return null;
	}

}