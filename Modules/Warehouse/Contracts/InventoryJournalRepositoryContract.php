<?php
namespace Plenty\Modules\Warehouse\Contracts;

use Plenty\Modules\Warehouse\Models\InventoryJournal;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;
use\Contracts;

/**
 * Get, create, update and delete inventory journal
 */
interface InventoryJournalRepositoryContract 
{

	/**
	 * Get a inventory journal
	 */
	public function getInventoryJournal(
		int $inventoryJournal
	):InventoryJournal;

	/**
	 * Get a inventory journal
	 */
	public function getInventoryJournalList(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
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