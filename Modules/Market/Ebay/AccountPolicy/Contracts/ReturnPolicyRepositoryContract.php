<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Contracts;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\ReturnPolicy;

/**
 * The contract for the eBay return policy repository.
 */
interface ReturnPolicyRepositoryContract 
{

	/**
	 * Get a stored return policy based on ID.
	 */
	public function get(
		string $id, 
		array $filters = []
	):ReturnPolicy;

}