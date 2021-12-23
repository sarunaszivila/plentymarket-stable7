<?php
namespace Plenty\Modules\Listing\Market\Events;

use Plenty\Modules\Listing\Market\Models\ListingMarket;

/**
 * An event class fired after a new listing market item specifics are deleted.
 */
abstract class ListingMarketItemSpecificsDeleted extends \Plenty\Modules\Listing\Market\Events\ListingMarketEvent 

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