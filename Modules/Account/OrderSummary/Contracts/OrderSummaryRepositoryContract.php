<?php
namespace Plenty\Modules\Account\OrderSummary\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelNotEditableException;
use Plenty\Modules\Account\OrderSummary\Models\OrderSummary;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The OrderSummaryRepositoryContract is the interface for the order summary repository. This interface allows to list, get, update, create and delete order summaries.
 */
interface OrderSummaryRepositoryContract 
{

	/**
	 * Gets an order summary. The ID of the order summary must be specified.
	 */
	public function findOrderSummaryById(
		int $orderSummaryId
	):OrderSummary;

	/**
	 * Updates an order summary. The ID of the order summary must be specified.
	 */
	public function updateOrderSummary(
		array $data, 
		int $orderSummaryId
	):OrderSummary;

	/**
	 * Creates an order summary.
	 */
	public function createOrderSummary(
		array $data
	):OrderSummary;

	/**
	 * Deletes an order summary. The ID of the order summary must be specified.
	 */
	public function deleteOrderSummary(
		int $orderSummaryId
	):bool;

	/**
	 * Returns a collection of all order summaries.
	 */
	public function allOrderSummaries(
		array $columns = [], 
		int $perPage = 50
	):Collection;

	/**
	 * Gets an order summary. The ID of the contact must be specified.
	 */
	public function findOrderSummaryByContactId(
		int $contactId
	):OrderSummary;

	/**
	 * Gets an order summary. The ID of the address must be specified.
	 */
	public function findOrderSummaryByAddressId(
		int $addressId
	):OrderSummary;

	/**
	 * Returns a collection of all unpaid order summaries.
	 */
	public function allUnpaidOrderSummaries(
		int $page = 1, 
		int $itemsPerPage = 50, 
		string $sortBy = "id", 
		string $sortOrder = "desc"
	):PaginatedResult;

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