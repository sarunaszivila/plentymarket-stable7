<?php
namespace Plenty\Modules\Order\DeliveryOrder\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Order\Models\Order;

/**
 * The DeliveryOrderRepositoryContract is the interface for the delivery order repository. This interface allows you to create, update or delete delivery orders. A delivery order will be created according to a parent order and can either be created manually or automatically.
 */
interface DeliveryOrderRepositoryContract 
{

	/**
	 * Create a delivery order
	 */
	public function create(
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update a delivery order
	 */
	public function update(
		int $orderId, 
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Delete a delivery order
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Delete an order item from a delivery
	 */
	public function deleteOrderItem(
		int $orderItemId
	):bool;

	/**
	 * Create a delivery order from a parent order
	 */
	public function createFromParent(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Create delivery orders automatically for all order items
	 */
	public function createAllAutomaticallyFromParent(
		int $orderId
	):Collection;

	/**
	 * Update currency
	 */
	public function updateCurrency(
		int $orderId, 
		array $data
	):Order;

}