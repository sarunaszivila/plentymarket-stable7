<?php
namespace Plenty\Modules\Warehouse\Contracts;

use Plenty\Modules\Warehouse\Models\WarehouseLocation;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;
use\Contracts;

/**
 * Get, create, update and delete warehouse locations
 */
interface WarehouseLocationRepositoryContract 
{

	/**
	 * Get a warehouse location
	 */
	public function getWarehouseLocation(
		int $warehouseLocation, 
		array $with = []
	):WarehouseLocation;

	/**
	 * Get all warehouse locations
	 */
	public function listWarehouseLocations(
		int $page = 1, 
		int $itemsPerPage = 50, 
		int $paginate = 1, 
		array $filters = [], 
		int $warehouseId = null, 
		array $with = []
	):PaginatedResult;

	/**
	 * List warehouse locations by levelId
	 */
	public function listWarehouseLocationsByLevelId(
		int $warehouseId, 
		int $levelId
	);

	/**
	 * Get first warehouse location matching the given label
Gets the first warehouse location matching the given label. The label must be specified.
	 */
	public function getWarehouseLocationByLabel(
		string $label
	):WarehouseLocation;

	/**
	 * Create a warehouse location
	 */
	public function createWarehouseLocation(
		array $data
	):WarehouseLocation;

	/**
	 * Update a warehouse location
	 */
	public function updateWarehouseLocation(
		int $warehouseLocation, 
		array $data
	):WarehouseLocation;

	/**
	 * Updates several Storage Locations in a single DB Transaction
with the data provided
	 */
	public function updateStorageLocations(
		 $data
	);

	/**
	 * Delete a warehouse location
	 */
	public function deleteWarehouseLocation(
		int $warehouseLocation
	);

	/**
	 * Delete multiple warehouse locations
	 */
	public function deleteMultipleWarehouseLocations(
		array $warehouseLocationIds
	);

	/**
	 * Edit the purpose and status for a group of storage locations
	 */
	public function executeGroupFunction(
		array $data
	):array;

	/**
	 * Generate warehouse location labels
	 */
	public function generateWarehouseLocationLabel(
		int $warehouseId, 
		array $warehouseLocationIds
	):array;

	/**
	 * Move a warehouse location position
	 */
	public function moveWarehouseLocationPosition(
		array $data
	);

	/**
	 * Get all warehouse locations stock
	 */
	public function listWarehouseLocationStock(
		int $page = 1, 
		int $itemsPerPage = 50, 
		int $paginate = 1, 
		array $filters = [], 
		int $warehouseLocationId = null, 
		array $with = []
	):PaginatedResult;

	/**
	 * Get availability for storage location
	 */
	public function getWarehouseLocationAvailability(
		int $warehouseLocationId
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