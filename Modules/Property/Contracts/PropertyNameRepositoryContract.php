<?php
namespace Plenty\Modules\Property\Contracts;

use Plenty\Modules\Property\Models\PropertyName;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, list, create, update and delete property names.
 */
interface PropertyNameRepositoryContract 
{

	/**
	 * Gets a property name. The ID of the property name must be specified.
	 */
	public function getName(
		int $nameId
	):PropertyName;

	/**
	 * Lists property names
	 */
	public function listNames(
		array $filters = []
	):array;

	/**
	 * Creates a property name
	 */
	public function createName(
		array $data
	):PropertyName;

	/**
	 * Updates a property name. The ID of property name must be specified.
	 */
	public function updateName(
		int $nameId, 
		array $data
	):PropertyName;

	/**
	 * Deletes a property name. The ID of property name must be specified.
	 */
	public function deleteName(
		int $nameId
	):array;

	/**
	 * Get a property name by name
	 */
	public function getPropertyByName(
		string $name
	):PropertyName;

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