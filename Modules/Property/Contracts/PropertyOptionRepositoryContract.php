<?php
namespace Plenty\Modules\Property\Contracts;

use Plenty\Modules\Property\Models\PropertyOption;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, list, create, update and delete property options.
 */
interface PropertyOptionRepositoryContract 
{

	/**
	 * Gets a property option. The ID of the property option must be specified.
	 */
	public function getPropertyOption(
		int $propertyOptionId
	):PropertyOption;

	/**
	 * List property options
	 */
	public function listPropertyOptions(
	):array;

	/**
	 * Creates a property option
	 */
	public function createPropertyOption(
		array $data
	):PropertyOption;

	/**
	 * Creates property options
	 */
	public function createPropertyOptions(
		array $data
	):array;

	/**
	 * Updates a property option. The ID of property option must be specified.
	 */
	public function updatePropertyOption(
		int $propertyOptionId, 
		array $data
	):PropertyOption;

	/**
	 * Deletes a property option. The ID of property option must be specified.
	 */
	public function deletePropertyOption(
		int $propertyOptionId
	):array;

	/**
	 * Delete one or more property options.
	 */
	public function deletePropertyOptions(
		array $optionIds
	):array;

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