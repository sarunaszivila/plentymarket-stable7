<?php
namespace Plenty\Modules\Property\Contracts;

use Plenty\Modules\Property\Models\Property;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete properties.
 */
interface PropertyRepositoryContract 
{

	/**
	 * Gets a property. The ID of the property must be specified.
	 */
	public function getProperty(
		int $propertyId, 
		array $with = []
	):Property;

	/**
	 * Lists properties
	 */
	public function listProperties(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		array $filters = [], 
		int $paginate = 1, 
		array $orderBy = []
	):array;

	/**
	 * Creates a property
	 */
	public function createProperty(
		array $data
	):Property;

	/**
	 * Updates a property. The ID of property must be specified.
	 */
	public function updateProperty(
		int $propertyId, 
		array $data
	):Property;

	/**
	 * Deletes a property. The ID of property must be specified.
	 */
	public function deleteProperty(
		int $propertyId
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