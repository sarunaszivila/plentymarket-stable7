<?php
namespace Plenty\Modules\Property\Contracts;

use Plenty\Modules\Property\Models\PropertyRelationValue;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property relation values.
 */
interface PropertyRelationValueRepositoryContract 
{

	/**
	 * Gets an property relation value. The ID of the property relation value must be specified.
	 */
	public function getPropertyRelationValue(
		int $propertyRelationValueId
	):PropertyRelationValue;

	/**
	 * List property relation values
	 */
	public function listPropertyRelationValues(
	):array;

	/**
	 * Creates an property relation value
	 */
	public function createPropertyRelationValue(
		array $data
	):PropertyRelationValue;

	/**
	 * Updates a property relation value. The ID of property relation value must be specified.
	 */
	public function updatePropertyRelationValue(
		int $propertyRelationValueId, 
		array $data
	):PropertyRelationValue;

	/**
	 * Update multiple property relation values
	 */
	public function updatePropertyRelationValues(
		array $data
	):PropertyRelationValue;

	/**
	 * Delete a property relation value
	 */
	public function deletePropertyRelationValue(
		int $propertyRelationValueId
	);

	/**
	 * Delete all property relation values of a specified property relation.
	 */
	public function deleteRelationsByRelationId(
		int $relationId
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