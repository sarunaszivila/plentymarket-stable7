<?php
namespace Plenty\Modules\Order\Shipping\Returns\Contracts;

use Plenty\Modules\Order\Shipping\Returns\Exceptions\ReturnsException;
use Plenty\Modules\Order\Shipping\Returns\Models\OrderReturns;
use Plenty\Modules\Order\Shipping\Returns\Models\RegisterReturnsResult;
use Plenty\Modules\Order\Shipping\Returns\Models\ReturnsServiceProvider;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ReturnsRepositoryContract is the interface for the order returns repository. This interface allows to register, assign to order and list order returns.
 */
interface ReturnsRepositoryContract 
{

	/**
	 * Register a new return
	 */
	public function registerReturns(
		string $pluginName, 
		array $orderIds
	):RegisterReturnsResult;

	/**
	 * Get return label by ID
	 */
	public function getReturnsLabelById(
		int $labelId, 
		array $with
	):PaginatedResult;

	/**
	 * Assign return label to order
	 */
	public function assignLabel2Return(
		int $orderId, 
		int $returnsId
	):OrderReturns;

	/**
	 * Get a paginated list of all order returns
	 */
	public function getOrderReturns(
		int $orderId, 
		array $with = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		string $sortBy = "id", 
		string $sortOrder = "desc"
	):PaginatedResult;

	/**
	 * Get a paginated list of all order returns
	 */
	public function getOrderReturnsByReturnsOrderId(
		int $returnsOrderId, 
		array $with = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		string $sortBy = "id", 
		string $sortOrder = "desc"
	):PaginatedResult;

	/**
	 * Create a return
	 */
	public function createReturnsOrder(
		int $orderId, 
		array $data
	);

	/**
	 * Update existing return
	 */
	public function updateReturnsOrder(
		int $returnsOrderId, 
		array $data
	);

	public function deleteReturnsByReturnsOrderId(
		int $returnsOrderId
	);

}