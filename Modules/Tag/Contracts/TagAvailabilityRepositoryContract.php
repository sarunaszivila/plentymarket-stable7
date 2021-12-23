<?php
namespace Plenty\Modules\Tag\Contracts;

use Plenty\Modules\Tag\Models\TagAvailability;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The TagAvailabilityRepositoryContract is the interface for the tag availability repository. This interface allows to update and create tag availabilities.
 */
interface TagAvailabilityRepositoryContract 
{

	public function update(
		array $data, 
		int $tagId, 
		string $availabilityType
	):TagAvailability;

	public function create(
		array $data
	):TagAvailability;

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