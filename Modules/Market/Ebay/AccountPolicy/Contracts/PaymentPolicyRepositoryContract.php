<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Contracts;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\PaymentPolicy;

/**
 * The contract for the eBay payment policy repository.
 */
interface PaymentPolicyRepositoryContract 
{

	/**
	 * Get a stored payment policy based on ID.
	 */
	public function get(
		string $id, 
		array $filters = []
	):PaymentPolicy;

}