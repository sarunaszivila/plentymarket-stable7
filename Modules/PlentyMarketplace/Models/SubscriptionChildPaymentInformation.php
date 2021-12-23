<?php
namespace Plenty\Modules\PlentyMarketplace\Models;


/**
 * Eloquent model representing a SubscriptionChildPaymentInformation.
 */
abstract class SubscriptionChildPaymentInformation 
{
	
public		$amount;
	
public		$status;
	
public		$unaccountable;
	
public		$currency;
	
public		$receivedAt;
	
public		$importedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}