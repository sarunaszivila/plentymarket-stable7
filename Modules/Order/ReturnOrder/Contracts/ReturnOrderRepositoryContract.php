<?php
namespace Plenty\Modules\Order\ReturnOrder\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * The ReturnOrderRepositoryContract is the interface for the return order repository. This interface allows you to create and update return orders.
 */
interface ReturnOrderRepositoryContract 
{

	/**
	 * Create a return
	 */
	public function create(
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update a return
	 */
	public function update(
		int $orderId, 
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Delete a return
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Delete an order item from a return
	 */
	public function deleteOrderItem(
		int $orderItemId
	):bool;

	/**
	 * Create a return from a parent order
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

}