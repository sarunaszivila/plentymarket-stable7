<?php
namespace Plenty\Modules\Order\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Order\Exceptions\OrderItemDeleteException;
use Plenty\Modules\Order\Models\OrderItem;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The OrderItemRepositoryContract is the interface for the order item repository. This interface allows you to find, create and update order items. An order item can be e.g. items, surcharges and coupons. Each order item is given a unique id, which links it to a specific order.
 */
interface OrderItemRepositoryContract 
{

	/**
	 * Get an order item
	 */
	public function getOrderItem(
		int $orderItemId, 
		array $with = [], 
		bool $lazyLoaded = false
	):OrderItem;

	/**
	 * Delete an order item
	 */
	public function deleteOrderItem(
		int $orderId, 
		int $orderItemId
	):bool;

	/**
	 * Search order items
	 */
	public function search(
		int $orderId, 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		string $sortBy = "id", 
		string $sortOrder = "asc"
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