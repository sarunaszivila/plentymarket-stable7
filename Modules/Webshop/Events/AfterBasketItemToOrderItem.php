<?php
namespace Plenty\Modules\Webshop\Events;


/**
 * Event for receiving or manupulating the order item
 */
abstract class AfterBasketItemToOrderItem 
{

	/**
	 * Get order item data generated from the basket item.
	 */
	abstract public function getOrderItem(
	):array;

	/**
	 * Get basket item data used to generate the order item from.
	 */
	abstract public function getBasketItem(
	):array;

	/**
	 * Get preview status for current event.
	 */
	abstract public function getIncompleteStatus(
	):bool;

}