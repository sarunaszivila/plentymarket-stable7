<?php
namespace Plenty\Modules\Listing\Market\Events;

use Plenty\Modules\Listing\Market\Models\ListingMarket;

/**
 * A base event class for all listing market events. Each listing market event expects an ListingMarket instance.
 */
abstract class ListingMarketEvent 
{

	public function __construct(
		ListingMarket $listingMarket
	)
	{
		return null;
	}

	/**
	 * Get the ListingMarket instance.
	 */
	public function getListingMarket(
	):ListingMarket
	{
		return null;
	}

}