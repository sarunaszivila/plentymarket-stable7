<?php
namespace Plenty\Modules\ElasticSync\Contracts\Report;

use Plenty\Modules\ElasticSync\Models\Report\RunReport;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * This interface provides methods to list reports
 */
interface ElasticSyncReportRepositoryContract 
{

	/**
	 * Gets a run report
	 */
	public function getRunReport(
		int $id
	):RunReport;

	/**
	 * Gets a run report log
	 */
	public function getRunReportLog(
		int $id
	);

	/**
	 * Cancels a run
	 */
	public function cancelRun(
		int $id
	);

	/**
	 * Lists run reports
	 */
	public function listRunReports(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = []
	):PaginatedResult;

	/**
	 * Lists job reports for a specific run
	 */
	public function listJobReports(
		int $reportId, 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = []
	):array;

	public function listJobs(
		int $reportId
	):array;

	public function listOutcomes(
		int $reportId, 
		string $job
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