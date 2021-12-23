<?php
namespace Plenty\Modules\LiveShopping\Contracts;


/**
 * Return information about live shopping offers.
 */
interface LiveShoppingRepositoryContract 
{

	/**
	 * Get live shopping data for specific live shopping ID.
	 */
	public function getLiveShopping(
		int $liveShoppingId
	);

	/**
	 * Get live shopping data for a specific item ID.
	 */
	public function getActiveByItemId(
		int $itemId
	);

	/**
	 * Get live shopping data for a specific live shopping ID and active status.
	 */
	public function getActive(
		int $liveShoppingId
	);

	/**
	 * Get the next live shopping data for a specific live shopping ID.
	 */
	public function getNextActive(
		int $liveShoppingId
	);

	/**
	 * Get the last expired live shopping data for a specific live shopping ID.
	 */
	public function getLastExpired(
		int $liveShoppingId
	);

	/**
	 * Get recently started or expired live shopping data.
	 */
	public function getRecentlyStartedOrExpired(
		int $time, 
		int $interval
	);

	/**
	 * Get an active live shopping status for specific item ID.
	 */
	public function itemHasActiveLiveShopping(
		int $itemId
	):bool;

	/**
	 * Increase the real sold quantity for specific item ID.
	 */
	public function increaseRealQuantity(
		int $itemId, 
		float $increase
	);

}