<?php
namespace Plenty\Modules\Property\Contracts;

use Plenty\Modules\Property\Models\PropertyRelation;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property relations.
 */
interface PropertyRelationRepositoryContract 
{

	/**
	 * Gets a property relation. The ID of the property relation must be specified.
	 */
	public function getRelation(
		int $relationId
	):PropertyRelation;

	/**
	 * List property relations
	 */
	public function listRelations(
		array $filters = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		int $paginate = 0, 
		array $sorting = []
	):array;

	/**
	 * Creates a property relation
	 */
	public function createRelation(
		array $data
	):PropertyRelation;

	/**
	 * Updates a property relation. The ID of property relation must be specified.
	 */
	public function updateRelation(
		int $relationId, 
		array $data
	):PropertyRelation;

	/**
	 * Deletes a property relation. The ID of property relation must be specified.
	 */
	public function deleteRelation(
		int $relationId
	);

	/**
	 * Save property relation file to S3
	 */
	public function savePropertyRelationFile(
		int $relationId, 
		array $data, 
		string $file = ""
	):string;

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