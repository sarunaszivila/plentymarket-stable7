<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Models;


/**
 * The eBay shipping option model
 */
abstract class ShippingOption 
{
	
public		$costType;
	
public		$insuranceFee;
	
public		$insuranceOffered;
	
public		$optionType;
	
public		$packageHandlingCost;
	
public		$rateTableId;
	
public		$shippingServices;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}