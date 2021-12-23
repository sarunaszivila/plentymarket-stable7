<?php
namespace Plenty\Modules\Listing\Market\Events;

use Plenty\Modules\Listing\Market\Models\ListingMarket;

/**
 * A base event class for all listing market events. Each listing market batch event expects an array of ListingMarket instances.
 */
abstract class ListingMarketBatchEvent 
{

	public function __construct(
		array $listingMarkets
	)
	{
		return null;
	}

	/**
	 * Get the list of ListingMarket instances.
	 */
	public function getListingMarkets(
	):array
	{
		return null;
	}

}