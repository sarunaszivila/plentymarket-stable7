<?php
namespace Plenty\Modules\Order\Documents\Contracts;

use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Get document accounting summaries.
 */
interface DocumentAccountingSummaryRepositoryContract 
{

	/**
	 * Lists document accounting summaries. A document accounting summary is saved along with each reversal document (for invoice and credit note). It contains accounting information about the order for this point in time. The summary is saved because an order can be updated after a reversal_document is generated. The information about the order before the update is needed for accounting.
	 */
	public function list(
		int $page = 1, 
		int $itemsPerPage = 10
	):PaginatedResult;

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