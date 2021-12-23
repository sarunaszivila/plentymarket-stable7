<?php
namespace Plenty\Modules\Item\UnitCombination\Contracts;

use Plenty\Modules\Item\UnitCombination\Models\UnitCombination;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Interface for unit combination
 */
interface UnitCombinationRepositoryContract 
{

	/**
	 * Returns all unit combinations
	 */
	public function all(
		int $itemsPerPage = 50, 
		int $page = 1
	):PaginatedResult;

	/**
	 * Returns the unit combination that matches the specified ID
	 */
	public function get(
		int $id
	):UnitCombination;

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