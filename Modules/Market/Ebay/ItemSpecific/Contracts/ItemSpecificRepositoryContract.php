<?php
namespace Plenty\Modules\Market\Ebay\ItemSpecific\Contracts;

use Plenty\Modules\Market\Ebay\ItemSpecific\Models\ItemSpecific;

/**
 * The contract for the Ebay category repository.
 */
interface ItemSpecificRepositoryContract 
{

	/**
	 * List item specifics.
	 */
	public function all(
		array $filters = []
	):array;

}