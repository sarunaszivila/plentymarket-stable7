<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Contracts;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\FulfillmentPolicy;

/**
 * The contract for the eBay fulfillment policy repository.
 */
interface FulfillmentPolicyRepositoryContract 
{

	/**
	 * Get a stored fulfillment policy based on ID.
	 */
	public function get(
		string $id, 
		array $filters = []
	):FulfillmentPolicy;

}