<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Models;


/**
 * The eBay shipping service model
 */
abstract class ShippingService 
{
	
public		$additionalShippingCost;
	
public		$buyerResponsibleForPickup;
	
public		$buyerResponsibleForShipping;
	
public		$cashOnDeliveryFee;
	
public		$freeShipping;
	
public		$shippingCarrierCode;
	
public		$shippingCost;
	
public		$shippingServiceCode;
	
public		$shipToLocations;
	
public		$sortOrder;
	
public		$surcharge;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}