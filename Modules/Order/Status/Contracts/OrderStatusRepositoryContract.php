<?php
namespace Plenty\Modules\Order\Status\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\Status\Models\OrderStatus;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The OrderStatusRepositoryContract is the interface for the order status repository. This interface allows you to get a single order status or to list order statuses as well as to create, update or delete.
 */
interface OrderStatusRepositoryContract 
{

	/**
	 * Get an order status.
	 */
	public function get(
		float $statusId
	):OrderStatus;

	/**
	 * Search order status.
	 */
	public function search(
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

	/**
	 * List order statuses.
	 */
	public function all(
	):Collection;

	/**
	 * Create an order status.
	 */
	public function create(
		array $data
	):OrderStatus;

	/**
	 * Update an order status.
	 */
	public function update(
		float $statusId, 
		array $data
	):OrderStatus;

	/**
	 * Delete an order status.
	 */
	public function delete(
		float $statusId
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