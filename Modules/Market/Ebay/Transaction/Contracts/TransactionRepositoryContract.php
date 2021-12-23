<?php
namespace Plenty\Modules\Market\Ebay\Transaction\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Market\Ebay\Transaction\Models\Transaction;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the ebay transaction repository.
 */
interface TransactionRepositoryContract 
{

	/**
	 * Gets a transaction.
	 */
	public function get(
		int $id
	):Transaction;

	/**
	 * Search ebay transactions
	 */
	public function search(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = []
	):array;

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