<?php
namespace Plenty\Modules\Basket\Exceptions;


/**
 * Created by ptopczewski, 17.05.16 09:37
Class BasketItemQuantityCheckException
 */
abstract class BasketItemQuantityCheckException extends BasketItemCheckException 

{

	/**
	 * minimum quantity not reached for item
	 */
	const DID_NOT_REACH_MINIMUM_QUANTITY_FOR_ITEM = 1;

	/**
	 * maximum quantity reached for item
	 */
	const DID_REACH_MAXIMUM_QUANTITY_FOR_ITEM = 2;

	/**
	 * maximum quantity reached for variation
	 */
	const DID_REACH_MAXIMUM_QUANTITY_FOR_VARIATION = 3;

	/**
	 * minimum quantity not reached for variation
	 */
	const DID_NOT_REACH_MINIMUM_QUANTITY_FOR_VARIATION = 4;

	/**
	 * minimum quantity not reached for item
	 */
	const VARIATION_NOT_FOUND = 1;

	/**
	 * maximum quantity reached for item
	 */
	const NOT_ENOUGH_STOCK_FOR_ITEM = 2;

	/**
	 * maximum quantity reached for variation
	 */
	const NOT_ENOUGH_STOCK_FOR_VARIATION = 3;

	/**
	 * minimum quantity not reached for variation
	 */
	const COUPON_REQUIRED = 4;

	const NOT_ENOUGH_STOCK_FOR_VARIATIONS = 5;

	const UPDATE_SET_FAILED = 20;

	const REMOVE_SET_COMPONENT_FAILED = 21;

	const UPDATE_SET_COMPONENT_FAILED = 22;

	const ITEM_SET_COMPONENT_MISMATCH = 23;

	const SET_PRICE_IS_MISSING = 24;

	/**
	 * BasketItemQuantityCheckException constructor.
	 */
	abstract public function __construct(
		int $code, 
		string $message = "", 
		\Exception $previous = null, 
		int $itemId = 0, 
		int $variationId = 0, 
		float $requestedQuantity = 0.0, 
		float $specifiedQuantity = 0.0
	);

	abstract public function getRequestedQuantity(
	):float;

	abstract public function getSpecifiedQuantity(
	):float;

}