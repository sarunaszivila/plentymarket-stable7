<?php
namespace Plenty\Modules\Property\Contracts;

use Plenty\Modules\Property\Models\PropertyGroupName;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, list, create, update and delete property group names.
 */
interface PropertyGroupNameRepositoryContract 
{

	/**
	 * Gets a group name. The ID of the group name must be specified.
	 */
	public function getGroupName(
		int $groupNameId
	):PropertyGroupName;

	/**
	 * Lists group names
	 */
	public function listGroupNames(
	):array;

	/**
	 * Creates a group name
	 */
	public function createGroupName(
		array $data
	):PropertyGroupName;

	/**
	 * Updates a group name. The ID of the group name must be specified.
	 */
	public function updateGroupName(
		int $groupNameId, 
		array $data
	):PropertyGroupName;

	/**
	 * Deletes a group name. The ID of group name must be specified.
	 */
	public function deleteGroupName(
		int $groupNameId
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