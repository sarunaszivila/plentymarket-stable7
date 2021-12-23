<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Events;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\ReturnPolicy;

/**
 * An event class fired after a new return policy is updated.
 */
abstract class ReturnPolicyUpdated extends \Plenty\Modules\Market\Ebay\AccountPolicy\Events\ReturnPolicyEvent 

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