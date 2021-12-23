<?php
namespace Plenty\Modules\Tag\Contracts;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Collection;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Tag\Exceptions\TagException;
use Plenty\Modules\Tag\Models\TagRelationship;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The TagRelationshipRepositoryContract is the interface for the tag relationship repository. This interface allows to update, create, delete and list tag relationships.
 */
interface TagRelationshipRepositoryContract 
{

	public function update(
		array $data, 
		int $tagId, 
		string $availabilityType, 
		int $relationshipValue
	):TagRelationship;

	public function create(
		array $data
	):TagRelationship;

	public function deleteRelation(
		int $relationshipValue, 
		int $tagId
	);

	public function deleteOneRelation(
		int $relationshipValue, 
		string $relationshipType, 
		int $tagId
	);

	/**
	 * Delete a tag relationship by the uuid5 value.
	 */
	public function deleteOneRelationByUUID(
		string $relationshipUUID, 
		string $relationshipType, 
		int $tagId
	):int;

	public function findByValueId(
		int $valueId
	):array;

	public function findByTagId(
		int $tagId
	):array;

	/**
	 * Gets a specific tag relationship or returns null.
	 */
	public function findRelationship(
		int $tagId, 
		int $relationshipValue, 
		string $relationshipType
	):TagRelationship;

	/**
	 * Deletes tag links by reference value and relationship type.
	 */
	public function delete(
		int $relationshipValue, 
		string $relationshipType
	):DeleteResponse;

	/**
	 * Deletes tag links by uuid5 reference value and relationship type.
	 */
	public function deleteByUUID(
		string $relationshipValue, 
		string $relationshipType
	):DeleteResponse;

	/**
	 * Deletes a list of tag relationships. The tag ID, tag type and relation value must be specified.
	 */
	public function deleteBulk(
		array $data
	):Collection;

	/**
	 * Returns all tag relationships.
	 */
	public function listRelationships(
		array $with = []
	):Collection;

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