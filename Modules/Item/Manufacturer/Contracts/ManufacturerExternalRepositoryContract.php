<?php
namespace Plenty\Modules\Item\Manufacturer\Contracts;

use Plenty\Modules\Item\Manufacturer\Models\ManufacturerExternal;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the manufacturer external repository
 */
interface ManufacturerExternalRepositoryContract 
{

	/**
	 * Gets a manufacturer external. The ID of the manufacturer and the ID of the market must be specified.
	 */
	public function find(
		int $manufacturerId, 
		int $marketId
	):ManufacturerExternal;

	/**
	 * Creates a manufacturer external.
	 */
	public function create(
		array $data
	):ManufacturerExternal;

	/**
	 * Updates a manufacturer external. The ID of the manufacturer and the ID of the market must be specified.
	 */
	public function update(
		array $data, 
		int $manufacturerId, 
		int $marketId
	):ManufacturerExternal;

	/**
	 * Deletes a manufacturer external. The ID of the manufacturer and the ID of the market must be specified.
	 */
	public function delete(
		int $manufacturerId, 
		int $marketId
	):DeleteResponse;

	/**
	 * Lists manufacturer externals.
	 */
	public function search(
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