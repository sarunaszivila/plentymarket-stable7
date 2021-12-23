<?php
namespace Plenty\Modules\Property\Contracts;

use Plenty\Modules\Property\Models\PropertyGroup;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, list, create, update and delete property groups. Property groups help to structure properties.
 */
interface PropertyGroupRepositoryContract 
{

	/**
	 * Gets a property group. The ID of the group must be specified.
	 */
	public function getGroup(
		int $groupId
	):PropertyGroup;

	/**
	 * Lists property groups
	 */
	public function listGroups(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		array $filters = [], 
		int $paginate = 1
	):array;

	/**
	 * Creates a property group
	 */
	public function createGroup(
		array $data
	):PropertyGroup;

	/**
	 * Updates a property group. The ID of group must be specified.
	 */
	public function updateGroup(
		int $groupId, 
		array $data
	):PropertyGroup;

	/**
	 * Deletes a property group. The ID of group must be specified.
	 */
	public function deleteGroup(
		int $groupId
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