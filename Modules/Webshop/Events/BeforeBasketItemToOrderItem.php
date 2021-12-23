<?php
namespace Plenty\Modules\Webshop\Events;

use Plenty\Modules\Basket\Events\BasketItem\BasketItemEvent;
use Plenty\Modules\Basket\Models\BasketItem;

/**
 * Event for receiving the basket item before transformed to an order item.
 */
abstract class BeforeBasketItemToOrderItem 
{

	/**
	 * Get preview status for current event.
	 */
	abstract public function getIncompleteStatus(
	):bool;

	/**
	 * The shopping cart item that has changed.
	 */
	abstract public function getBasketItem(
	):BasketItem;

}