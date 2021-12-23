<?php
namespace Plenty\Modules\Item\ItemShippingProfiles\Contracts;

use Plenty\Modules\Item\ItemShippingProfiles\Models\ItemShippingProfiles;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Repository for ItemShippingProfiles
 */
interface ItemShippingProfilesRepositoryContract 
{

	/**
	 * Finds a shipping profile link by ID
	 */
	public function find(
		int $id
	):ItemShippingProfiles;

	/**
	 * Lists all shipping profiles activated for an item
	 */
	public function findByItemId(
		int $itemId
	):array;

	/**
	 * Activates a shipping profile for an item
	 */
	public function create(
		array $data
	):ItemShippingProfiles;

	/**
	 * Deactivates a shipping profile for an item
	 */
	public function delete(
		int $id
	):array;

	/**
	 * Lists all shipping profiles of all items
	 */
	public function getItemShippingProfiles(
		int $itemsPerPage, 
		int $page
	):PaginatedResult;

	/**
	 * Activates up to 50 shipping profiles for items
	 */
	public function createBulk(
		array $data
	):array;

	/**
	 * Deactivates all shipping profiles for an item
	 */
	public function deleteBulk(
		int $itemId
	);

	/**
	 * Delete the link between the specified shipping profile and item
	 */
	public function deleteOne(
		int $shippingProfileId, 
		int $itemId
	):DeleteResponse;

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Returns a collection of parsed filters as Condition object
	 */
	public function getConditions(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

}