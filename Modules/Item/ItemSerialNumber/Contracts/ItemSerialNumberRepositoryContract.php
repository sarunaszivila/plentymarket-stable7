<?php
namespace Plenty\Modules\Item\ItemSerialNumber\Contracts;

use Illuminate\Auth\Access\AuthorizationException;
use Plenty\Modules\Item\ItemSerialNumber\Models\ItemSerialNumber;
use Plenty\Repositories\Contracts\DeleteResponseContract;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract of the item serial number repository
 */
interface ItemSerialNumberRepositoryContract 
{

	/**
	 * Lists all serial numbers.
	 */
	public function all(
		int $perPage = 100, 
		int $page = 1
	):PaginatedResult;

	/**
	 * Gets a serial number. The ID of the serial number must be specified.
	 */
	public function show(
		int $id
	):ItemSerialNumber;

	/**
	 * Creates a serial number
	 */
	public function create(
		array $data
	):ItemSerialNumber;

	/**
	 * Updates a serial number. The ID of the serial number must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):ItemSerialNumber;

	/**
	 * Deletes a serial number. The ID of the serial number must be specified.
	 */
	public function delete(
		int $id
	):DeleteResponseContract;

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

}