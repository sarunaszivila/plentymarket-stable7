<?php
namespace Plenty\Modules\ElasticSync\Contracts\Report;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\ElasticSync\Models\Report\RunReport;
use Plenty\Modules\ElasticSync\Models\Report\RunReportOption;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * This interface provides methods to CRUD report options
 */
interface ElasticSyncReportOptionRepositoryContract 
{

	/**
	 * Creates a run report option
	 */
	public function create(
		array $data
	):RunReportOption;

	/**
	 * Gets a run report option
	 */
	public function get(
		int $id
	):RunReportOption;

	/**
	 * Updates a run report option
	 */
	public function update(
		int $id, 
		array $data
	):RunReportOption;

	/**
	 * Deletes a run report option
	 */
	public function delete(
		int $id
	);

	/**
	 * Sets a run report option
	 */
	public function set(
		 $report, 
		string $name, 
		string $value = null, 
		string $type = "string"
	);

	/**
	 * Gets the option of a report by name
	 */
	public function getOptionByName(
		 $report, 
		string $name
	);

	/**
	 * Gets the value of a report option
	 */
	public function getValueByName(
		 $report, 
		string $name
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