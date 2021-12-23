<?php
namespace Plenty\Modules\Category\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Category\Models\CategoryProperty;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * Repository Contract for CategoryProperty
 */
interface CategoryPropertyRepositoryContract 
{

	/**
	 * Link a category to an Elmar category
	 */
	public function create(
		array $data
	):CategoryProperty;

	/**
	 * Update a link between a category and an Elmar category
	 */
	public function update(
		int $categoryId, 
		float $marketId, 
		int $plentyId, 
		array $data
	):CategoryProperty;

	/**
	 * Delete the link between a category and an Elmar category
	 */
	public function delete(
		int $categoryId, 
		float $marketId, 
		int $plentyId
	):DeleteResponse;

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