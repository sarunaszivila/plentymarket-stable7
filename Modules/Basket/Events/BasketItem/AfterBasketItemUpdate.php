<?php
namespace Plenty\Modules\Basket\Events\BasketItem;

use Plenty\Modules\Basket\Models\BasketItem;

/**
 * The event is triggered after an item in the shopping cart is updated.
 */
abstract class AfterBasketItemUpdate 
{

	/**
	 * The shopping cart item that has changed.
	 */
	abstract public function getBasketItem(
	):BasketItem;

}