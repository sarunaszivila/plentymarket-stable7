<?php
namespace Plenty\Modules\Property\Contracts;

use Plenty\Modules\Property\Models\PropertySelection;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property selections.
 */
interface PropertySelectionRepositoryContract 
{

	/**
	 * Gets a property selection. The ID of the property selection must be specified.
	 */
	public function getPropertySelection(
		int $propertySelectionId
	):PropertySelection;

	/**
	 * List property selections
	 */
	public function listPropertySelections(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		array $filters = []
	):array;

	/**
	 * Creates a property selection
	 */
	public function createPropertySelection(
		array $data
	):PropertySelection;

	/**
	 * Updates a property selection. The ID of property selection must be specified.
	 */
	public function updatePropertySelection(
		int $propertySelectionId, 
		array $data
	):PropertySelection;

	/**
	 * Deletes a property selection. The ID of property selection must be specified.
	 */
	public function deletePropertySelection(
		int $propertySelectionId
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