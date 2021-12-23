<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Models;


/**
 * The eBay fulfillment policy model
 */
abstract class FulfillmentPolicy 
{
	
public		$fulfillmentPolicyId;
	
public		$categoryTypes;
	
public		$description;
	
public		$freightShipping;
	
public		$globalShipping;
	
public		$handlingTime;
	
public		$localPickup;
	
public		$marketplaceId;
	
public		$name;
	
public		$pickupDropOff;
	
public		$shippingOptions;
	
public		$shipToLocations;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}