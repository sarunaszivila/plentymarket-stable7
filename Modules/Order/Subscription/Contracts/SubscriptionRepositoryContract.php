<?php
namespace Plenty\Modules\Order\Subscription\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * The SubscriptionRepositoryContract is the interface for the subscription repository. This interface allows you to create and update subscriptions.
 */
interface SubscriptionRepositoryContract 
{

	/**
	 * Create a subscription
	 */
	public function create(
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update a subscription
	 */
	public function update(
		int $orderId, 
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Delete a subscription
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Delete an order item from a subscription
	 */
	public function deleteOrderItem(
		int $orderItemId
	):bool;

	/**
	 * Update currency
	 */
	public function updateCurrency(
		int $orderId, 
		array $data
	):Order;

}