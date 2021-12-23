<?php
namespace Plenty\Repositories\Criteria\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Plenty\Repositories\Criteria\Criteria;

/**
 * Interface which provides the possibility to use Criteria filters.
 */
interface CriteriableContract 
{

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