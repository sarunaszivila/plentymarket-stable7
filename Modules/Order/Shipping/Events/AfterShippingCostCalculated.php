<?php
namespace Plenty\Modules\Order\Shipping\Events;


/**
 * An event class fired after the shipping calculation is done. Listeners can add fees to the shipping costs.
 * The shipping provider type name is mandatory. The ID of the order is optional.
 */
abstract class AfterShippingCostCalculated 
{

	/**
	 * Get the shipping service provider
	 */
	abstract public function getShippingServiceProvider(
	):int;

	/**
	 * AfterShippingCostCalculated constructor.
	 */
	abstract public function __construct(
		string $shippingServiceProvider, 
		int $orderId, 
		int $shippingProfileId
	);

	/**
	 * Get the ID of the order.
	 */
	abstract public function getOrderId(
	):int;

	/**
	 * Get the additional fee.
	 */
	abstract public function getAdditonalFee(
	):float;

	/**
	 * Set the additional fee.
	 */
	abstract public function addAdditionalFee(
		float $additionalFee
	):AfterShippingCostCalculated;

	/**
	 * Get the ID of the shipping profile.
	 */
	abstract public function getShippingProfileId(
	):int;

	/**
	 * Set the ID of the shipping profile.
	 */
	abstract public function setShippingProfileId(
		int $shippingProfileId
	);

}