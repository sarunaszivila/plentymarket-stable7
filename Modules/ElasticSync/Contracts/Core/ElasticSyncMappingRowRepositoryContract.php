<?php
namespace Plenty\Modules\ElasticSync\Contracts\Core;

use Illuminate\Database\Eloquent\Model;
use Plenty\Modules\ElasticSync\Models\Core\ElasticSyncMappingRow;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, list, create, update and delete elastic sync mapping rows.
 */
interface ElasticSyncMappingRowRepositoryContract 
{

	/**
	 * Create a sync mapping row.
	 */
	public function createSyncMappingRow(
		int $mappingId, 
		array $data
	);

	/**
	 * Get a sync mapping row.
	 */
	public function getSyncMappingRow(
		int $rowId
	);

	/**
	 * List sync mapping rows.
	 */
	public function listSyncMappingRows(
		int $mappingId, 
		array $filters = [], 
		array $with = [], 
		int $page = 1, 
		int $itemsPerPage = 25
	);

	/**
	 * Update a sync mapping row.
	 */
	public function updateSyncMappingRow(
		int $rowId, 
		array $data
	);

	/**
	 * Delete a sync mapping row.
	 */
	public function deleteSyncMappingRow(
		int $rowId
	);

	/**
	 * Update sync mapping rows.
	 */
	public function updateSyncMappingRows(
		int $mappingId, 
		array $data
	);

	/**
	 * Create sync mapping rows.
	 */
	public function createSyncMappingRows(
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