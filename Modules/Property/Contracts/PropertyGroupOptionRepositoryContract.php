<?php
namespace Plenty\Modules\Property\Contracts;

use Plenty\Modules\Property\Models\PropertyGroupOption;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property group options.
 */
interface PropertyGroupOptionRepositoryContract 
{

	/**
	 * Get a group option. The ID of the group option must be specified.
	 */
	public function getGroupOption(
		int $groupOptionId
	):PropertyGroupOption;

	/**
	 * List group options
	 */
	public function listGroupOptions(
	):array;

	/**
	 * Creates a group option
	 */
	public function createGroupOption(
		array $data
	):PropertyGroupOption;

	/**
	 * Updates a group option. The ID of group option must be specified.
	 */
	public function updateGroupOption(
		int $groupOptionId, 
		array $data
	):PropertyGroupOption;

	/**
	 * Deletes a group option. The ID of group option must be specified.
	 */
	public function deleteGroupOption(
		int $groupOptionId
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