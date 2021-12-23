<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Models;


/**
 * The eBay deposit model
 */
abstract class Deposit 
{
	
public		$amount;
	
public		$dueIn;
	
public		$paymentMethods;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}