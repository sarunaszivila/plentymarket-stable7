<?php
namespace Plenty\Modules\Basket\Contracts;

use Plenty\Modules\Basket\Models\BasketItem;

/**
 * The BasketItemRepositoryContract is the interface for the basket item repository. This interface allows to list, add, update and delete items from the shopping cart of the current customer session.
 */
interface BasketItemRepositoryContract 
{

	/**
	 * Gets an existing item by ID in the shopping cart of the current customer session.
	 */
	public function findOneById(
		int $basketRowId
	):BasketItem;

	/**
	 * Gets an existing item by item data in the shopping cart of the current customer session.
	 */
	public function findExistingOneByData(
		array $data
	):BasketItem;

	/**
	 * Gets all existing item by item data in the shopping cart of the current customer session.
	 */
	public function findAllExistingOneByData(
		array $data
	):array;

	/**
	 * Lists all items in the shopping cart of the current customer session.
	 */
	public function all(
	):array;

	/**
	 * Returns a sum of quantities for all basket items of the current customer session.
	 */
	public function getBasketItemQuantity(
	):float;

	/**
	 * Creates an item with the specified item data in the shopping cart.
	 */
	public function addBasketItem(
		array $data, 
		bool $fireEvents = true
	):BasketItem;

	/**
	 * Updates an existing item in the shopping cart. The ID of the item and the data to be updated must be specified.
	 */
	public function updateBasketItem(
		int $basketItemId, 
		array $data, 
		bool $fireEvents = true
	);

	/**
	 * Deletes an item from the shopping cart. The ID of the item must be specified.
	 */
	public function removeBasketItem(
		int $basketItemId, 
		bool $dispatchAfterBasketChangedEvent = true
	);

}