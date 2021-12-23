<?php
namespace Plenty\Modules\Item\ItemCrossSelling\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\ItemCrossSelling\Models\ItemCrossSelling;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Repository for item cross-selling
 */
interface ItemCrossSellingRepositoryContract 
{

	public function create(
		array $data
	):ItemCrossSelling;

	public function show(
		int $itemId
	):ItemCrossSelling;

	public function delete(
		int $itemId, 
		int $crossItemId
	):bool;

	public function findByItemId(
		int $itemId
	):array;

	/**
	 * List all cross-selling links where the given item ID occurs
	 */
	public function findAllByItemId(
		int $itemId
	):array;

	public function search(
		int $itemsPerPage = 50, 
		int $page = 1
	):PaginatedResult;

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

}