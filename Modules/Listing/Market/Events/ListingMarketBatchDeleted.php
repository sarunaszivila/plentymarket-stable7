<?php
namespace Plenty\Modules\Listing\Market\Events;


/**
 * An event class fired after multiple listing markets are deleted.
 */
abstract class ListingMarketBatchDeleted extends \Plenty\Modules\Listing\Market\Events\ListingMarketBatchEvent 

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