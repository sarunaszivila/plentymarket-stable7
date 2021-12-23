<?php
namespace Plenty\Modules\Order\Repair\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * The RepairRepositoryContract is the interface for the repair repository. This interface allows you to create and update repairs.
 */
interface RepairRepositoryContract 
{

	/**
	 * Create a repair
	 */
	public function create(
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update a repair
	 */
	public function update(
		int $orderId, 
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Delete a repair
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Delete an order item from a repair
	 */
	public function deleteOrderItem(
		int $orderItemId
	):bool;

	/**
	 * Create a repair from a parent order
	 */
	public function createFromParent(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Update currency
	 */
	public function updateCurrency(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Book order.
	 */
	public function book(
		int $orderId, 
		array $data = []
	):bool;

	/**
	 * Cancellation the booking of an order. The ID of the order must be specified.
	 */
	public function cancelBooking(
		int $orderId, 
		array $data = []
	):bool;

}