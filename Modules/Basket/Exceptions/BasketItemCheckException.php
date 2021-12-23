<?php
namespace Plenty\Modules\Basket\Exceptions;

use Plenty\Plugin\Error\HTTPException;

/**
 * Created by ptopczewski, 12.05.16 09:03
Class BasketItemCheckException
 */
abstract class BasketItemCheckException extends HTTPException 

{

	/**
	 * the variation could not found
	 */
	const VARIATION_NOT_FOUND = 1;

	/**
	 * not enough stock for item
	 */
	const NOT_ENOUGH_STOCK_FOR_ITEM = 2;

	/**
	 * not enough stock for variation
	 */
	const NOT_ENOUGH_STOCK_FOR_VARIATION = 3;

	/**
	 * promotion coupon is required
	 */
	const COUPON_REQUIRED = 4;

	/**
	 * not enough stock for variations
	 */
	const NOT_ENOUGH_STOCK_FOR_VARIATIONS = 5;

	/**
	 * Set cant be udpated
	 */
	const UPDATE_SET_FAILED = 20;

	/**
	 * Set Component cant be removed
	 */
	const REMOVE_SET_COMPONENT_FAILED = 21;

	/**
	 * Set Component cant be updated
	 */
	const UPDATE_SET_COMPONENT_FAILED = 22;

	/**
	 * Set includes invalid components
	 */
	const ITEM_SET_COMPONENT_MISMATCH = 23;

	const SET_PRICE_IS_MISSING = 24;

	/**
	 * BasketItemCheckException constructor.
	 */
	abstract public function __construct(
		int $code = 404, 
		string $message = "", 
		\Exception $previous = null, 
		int $itemId = 0, 
		int $variationId = 0, 
		float $stockNet = 0.0, 
		array $additionalData = []
	);

	abstract public function getItemId(
	):int;

	abstract public function getVariationId(
	):int;

	abstract public function getStockNet(
	):float;

	abstract public function getAdditionalData(
	):array;

}