<?php
namespace Plenty\Modules\ElasticSync\Contracts\Core;

use Illuminate\Database\Eloquent\Model;
use Plenty\Modules\ElasticSync\Models\Core\ElasticSyncMappingFilter;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, list, create, update and delete elastic sync mapping filters.
 */
interface ElasticSyncMappingFilterRepositoryContract 
{

	/**
	 * Create a sync mapping filter.
	 */
	public function createSyncMappingFilter(
		int $mappingId, 
		array $data
	);

	/**
	 * Get a sync mapping filter.
	 */
	public function getSyncMappingFilter(
		int $filterId
	);

	/**
	 * List sync mapping filters.
	 */
	public function listSyncMappingFilters(
		int $mappingId, 
		array $filters = [], 
		array $with = []
	);

	/**
	 * Update a sync mapping filter.
	 */
	public function updateSyncMappingFilter(
		int $filterId, 
		array $data
	);

	/**
	 * Delete a sync mapping filter.
	 */
	public function deleteSyncMappingFilter(
		int $filterId
	);

	/**
	 * Create sync mapping filters.
	 */
	public function createSyncMappingFilters(
		int $mappingId, 
		array $data
	);

	/**
	 * Update sync mapping filters.
	 */
	public function updateSyncMappingFilters(
		int $mappingId, 
		array $data
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