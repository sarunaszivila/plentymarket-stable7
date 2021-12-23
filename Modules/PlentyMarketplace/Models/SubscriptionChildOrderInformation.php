<?php
namespace Plenty\Modules\PlentyMarketplace\Models;


/**
 * Eloquent model representing a SubscriptionChildOrderInformation.
 */
abstract class SubscriptionChildOrderInformation 
{
	
public		$paymentStatus;
	
public		$paymentInformation;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}