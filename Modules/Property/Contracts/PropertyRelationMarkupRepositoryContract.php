<?php
namespace Plenty\Modules\Property\Contracts;

use Plenty\Modules\Property\Models\PropertyRelationMarkup;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, list, create, update and delete property relation markups.
 */
interface PropertyRelationMarkupRepositoryContract 
{

	/**
	 * Get a property relation markup. The ID of the property relation markup must be specified.
	 */
	public function getRelationMarkup(
		int $relationMarkupId
	):PropertyRelationMarkup;

	/**
	 * List property relation markups
	 */
	public function listRelationMarkups(
	):array;

	/**
	 * Creates a property relation markup
	 */
	public function createRelationMarkup(
		array $data
	):PropertyRelationMarkup;

	/**
	 * Updates a property relation markup. The ID of property relation markup must be specified.
	 */
	public function updateRelationMarkup(
		int $relationMarkupId, 
		array $data
	):PropertyRelationMarkup;

	/**
	 * Deletes a property relation markup. The ID of property relation markup must be specified.
	 */
	public function deleteRelationMarkup(
		int $relationMarkupId
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