<?php
namespace Plenty\Modules\ElasticSync\Contracts\Core;

use Illuminate\Database\Eloquent\Model;
use Plenty\Modules\ElasticSync\Models\Core\ElasticSyncOption;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, list, create, update and delete elastic sync options.
 */
interface ElasticSyncOptionRepositoryContract 
{

	/**
	 * Create a sync option.
	 */
	public function createSyncOption(
		int $syncId, 
		array $data
	);

	/**
	 * Get a sync option.
	 */
	public function getSyncOption(
		int $optionId
	);

	/**
	 * List sync options.
	 */
	public function listSyncOptions(
		int $syncId, 
		array $filters = [], 
		array $with = []
	);

	/**
	 * Update a sync option.
	 */
	public function updateSyncOption(
		int $optionId, 
		array $data
	);

	/**
	 * Delete a sync option.
	 */
	public function deleteSyncOption(
		int $optionId
	);

	/**
	 * Create sync options.
	 */
	public function createSyncOptions(
		int $syncId, 
		array $data
	);

	/**
	 * Update sync options.
	 */
	public function updateSyncOptions(
		int $syncId, 
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