<?php
namespace Plenty\Modules\ElasticSync\Contracts\Core;

use Illuminate\Database\Eloquent\Model;
use Plenty\Modules\ElasticSync\Models\Core\ElasticSyncMatching;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, list, create, update and delete elastic sync matches.
 */
interface ElasticSyncMatchingRepositoryContract 
{

	/**
	 * Create a sync matching.
	 */
	public function createSyncMatching(
		int $syncId, 
		array $data
	);

	/**
	 * Get a sync matching.
	 */
	public function getSyncMatching(
		int $matchingId
	);

	/**
	 * List sync matches.
	 */
	public function listSyncMatches(
		int $syncId, 
		array $filters = [], 
		array $with = []
	);

	/**
	 * Update a sync matching.
	 */
	public function updateSyncMatching(
		int $matchingId, 
		array $data
	);

	/**
	 * Delete a sync matching.
	 */
	public function deleteSyncMatching(
		int $matchingId
	);

	/**
	 * Get an entity.
	 */
	public function getEntity(
		int $syncId
	):array;

	/**
	 * Get a list of all mappings for a particular sync type.
	 */
	public function matchingFields(
		string $syncType
	):array;

	/**
	 * Create sync matches.
	 */
	public function createSyncMatches(
		int $syncId, 
		array $data
	);

	/**
	 * Update sync matches.
	 */
	public function updateSyncMatches(
		int $syncId, 
		array $data
	);

	/**
	 * Get list of decimals.
	 */
	public function listDecimals(
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