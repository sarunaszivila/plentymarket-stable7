<?php
namespace Plenty\Modules\Warehouse\Contracts;

use Plenty\Modules\Warehouse\Models\WarehouseLocationDimension;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use\Contracts;

/**
 * Get, create, update and delete warehouse location dimensions
 */
interface WarehouseLocationDimensionRepositoryContract 
{

	/**
	 * Get a warehouse location dimension
	 */
	public function getWarehouseLocationDimension(
		int $warehouseLocationDimension, 
		array $with = []
	):WarehouseLocationDimension;

	/**
	 * Get all warehouse location dimensions
	 */
	public function listWarehouseLocationDimension(
		int $warehouseId
	):WarehouseLocationDimension;

	/**
	 * Create multiple warehouse location dimensions
	 */
	public function createMultipleWarehouseLocationDimension(
		array $data
	):array;

	/**
	 * Create a warehouse location dimension
	 */
	public function createWarehouseLocationDimension(
		array $data
	):WarehouseLocationDimension;

	/**
	 * Update a warehouse location dimension
	 */
	public function updateWarehouseLocationDimension(
		int $warehouseLocationDimension, 
		array $data
	):WarehouseLocationDimension;

	/**
	 * Delete a warehouse location dimension
	 */
	public function deleteWarehouseLocationDimension(
		int $warehouseLocationDimension
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