<?php
namespace Plenty\Modules\ElasticSync\Contracts\Core;

use Illuminate\Database\Eloquent\Model;
use Plenty\Modules\ElasticSync\Models\Core\ElasticSyncMapping;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * This interface allows you to get, list, create, update and delete elastic sync mappings.
 */
interface ElasticSyncMappingRepositoryContract 
{

	/**
	 * Create a sync mapping.
	 */
	public function createSyncMapping(
		int $syncId, 
		array $data
	);

	/**
	 * Get a sync mapping.
	 */
	public function getSyncMapping(
		int $mappingId, 
		array $with = []
	);

	/**
	 * List sync mappings.
	 */
	public function listSyncMappings(
		int $syncId, 
		int $page = 1, 
		int $itemsPerPage = 50, 
		int $paginate = 1, 
		array $filters = [], 
		array $with = []
	):PaginatedResult;

	/**
	 * Update a sync mapping.
	 */
	public function updateSyncMapping(
		int $mappingId, 
		array $data
	);

	/**
	 * Delete a sync mapping.
	 */
	public function deleteSyncMapping(
		int $mappingId
	);

	/**
	 * Delete one or more mappings.
	 */
	public function deleteSyncMappings(
		array $mappingIds
	);

	/**
	 * Copy sync mapping.
	 */
	public function copySyncMapping(
		array $mappingIds
	):array;

	/**
	 * Get the mapping values.
	 */
	public function mappingValues(
		string $sync_type
	):array;

	/**
	 * Get the field value map for all sync types.
	 */
	public function fieldValuesMap(
	):array;

	/**
	 * Get a list with variation matches.
	 */
	public function listVariationMatched(
	):array;

	/**
	 * Get the model key to field value key.
	 */
	public function modelKeyToFieldValueKey(
		string $syncType
	):array;

	/**
	 * Get the label list for mapping filtration.
	 */
	public function filterLabelList(
	):array;

	/**
	 * Get the mapping values tree.
	 */
	public function mappingValuesTree(
		array $data
	):array;

	/**
	 * Get the csv columns of a sync.
	 */
	public function csvColumns(
		int $syncId
	):array;

	/**
	 * Get the csv rows.
	 */
	public function rowCsv(
		int $syncId
	):array;

	/**
	 * Get the plenty fields value map for a particular sync type.
	 */
	public function getPlentyFieldsValueMap(
		string $syncDataType
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