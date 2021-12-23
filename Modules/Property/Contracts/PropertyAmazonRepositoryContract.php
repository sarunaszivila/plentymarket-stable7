<?php
namespace Plenty\Modules\Property\Contracts;

use Plenty\Modules\Property\Models\PropertyAmazon;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property amazons.
 */
interface PropertyAmazonRepositoryContract 
{

	/**
	 * Gets a property amazon. The ID of the property amazon must be specified.
	 */
	public function getPropertyAmazon(
		int $propertyAmazonId
	):PropertyAmazon;

	/**
	 * List property amazons
	 */
	public function listPropertyAmazons(
		array $with = [], 
		array $filters = []
	):array;

	/**
	 * Creates one or multiple property amazon
	 */
	public function createPropertyAmazon(
		array $data
	):PropertyAmazon;

	/**
	 * Updates one or multiple property amazon.
	 */
	public function updatePropertyAmazon(
		array $data
	):PropertyAmazon;

	/**
	 * Deletes a property amazon. The ID of property amazon must be specified.
	 */
	public function deletePropertyAmazon(
		int $propertyAmazonId
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