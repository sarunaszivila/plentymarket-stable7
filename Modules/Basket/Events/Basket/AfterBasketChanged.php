<?php
namespace Plenty\Modules\Basket\Events\Basket;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Account\Address\Models\Address;
use Plenty\Modules\Basket\Contracts\BasketRepositoryContract;
use Plenty\Modules\Basket\Models\Basket;
use Plenty\Modules\Order\Contracts\PriceCalculatorContract;
use Plenty\Modules\Order\Coupon\Code\Validation\Models\CouponCodeValidation;
use Plenty\Modules\Order\Models\PriceCalculationResult;

/**
 * The event is triggered after the shopping cart is changed.
 */
abstract class AfterBasketChanged 
{

	/**
	 * Get information if the current shopping cart has a valid coupon.
	 */
	abstract public function hasValidCoupon(
	):bool;

	/**
	 * Get the validation errors from a failed attempt to add a coupon to the shopping cart.
	 */
	abstract public function getCouponValidationError(
	):ValidationException;

	/**
	 * Set if the shopping cart has a valid coupon.
	 */
	abstract public function setHasValidCoupon(
		bool $hasValidCoupon, 
		ValidationException $couponValidationError = null
	);

	/**
	 * Get the current shopping cart.
	 */
	abstract public function getBasket(
	):Basket;

	/**
	 * Get the location ID from the current shopping cart.
	 */
	abstract public function getLocationId(
	):int;

	/**
	 * Set the location of the current shopping cart.
	 */
	abstract public function setLocationId(
		int $locationId
	):self;

	/**
	 * Get the invoice address of the current shopping cart.
	 */
	abstract public function getInvoiceAddress(
	):Address;

	/**
	 * Set the invoice address to the currrent shopping cart.
	 */
	abstract public function setInvoiceAddress(
		Address $invoiceAddress
	):self;

	/**
	 * Get the highest value for age restriction of all items in the shopping cart.
	 */
	abstract public function getMaxFsk(
	):int;

	/**
	 * Set the highest value for age restriction of all items in the shopping cart.
	 */
	abstract public function setMaxFsk(
		int $maxFsk
	):self;

	/**
	 * Get the shipping costs of the shopping cart.
	 */
	abstract public function getShippingCosts(
	):float;

	/**
	 * Set the shipping costs of the shopping cart.
	 */
	abstract public function setShippingCosts(
		float $shippingCosts
	):self;

}