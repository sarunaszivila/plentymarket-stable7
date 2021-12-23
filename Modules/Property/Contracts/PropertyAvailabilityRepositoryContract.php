<?php
namespace Plenty\Modules\Property\Contracts;

use Plenty\Modules\Property\Models\PropertyAvailability;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * Get, create, update and delete property availability.
 */
interface PropertyAvailabilityRepositoryContract 
{

	/**
	 * Gets an availability. The ID of the availability must be specified.
	 */
	public function getAvailability(
		int $availabilityId
	):PropertyAvailability;

	/**
	 * Lists availabilities
	 */
	public function listAvailabilities(
	):array;

	/**
	 * Creates an availability
	 */
	public function createAvailability(
		array $data
	):PropertyAvailability;

	/**
	 * Updates an availability. The ID of availability must be specified.
	 */
	public function updateAvailability(
		int $availabilityId, 
		array $data
	):PropertyAvailability;

	/**
	 * Deletes an availability. The ID of availability must be specified.
	 */
	public function deleteAvailability(
		int $availabilityId
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