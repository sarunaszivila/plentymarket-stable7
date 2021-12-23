<?php
namespace Plenty\Modules\PlentyMarketplace\Models;


/**
 * Eloquent model representing a SubscriptionOrderInformation.
 */
abstract class SubscriptionOrderInformation 
{
	
public		$isPaid;
	
public		$intervalType;
	
public		$intervalValue;
	
public		$startDate;
	
public		$subscriptionLastRun;
	
public		$subscriptionNextRun;
	
public		$childOrders;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}