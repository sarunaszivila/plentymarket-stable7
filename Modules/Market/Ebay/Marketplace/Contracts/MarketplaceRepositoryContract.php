<?php
namespace Plenty\Modules\Market\Ebay\Marketplace\Contracts;

use Plenty\Modules\Market\Ebay\Marketplace\Models\Marketplace;

/**
 * The contract for the Ebay marketplace repository.
 */
interface MarketplaceRepositoryContract 
{

	/**
	 * Get the list of all available eBay marketplaces.
	 */
	public function all(
		array $filters = []
	):array;

	/**
	 * Get the list of all available eBay marketplaces.
	 */
	public function allEbay(
		array $filters = []
	):array;

}