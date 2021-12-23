<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Models;


/**
 * The eBay payment method model
 */
abstract class PaymentMethod 
{
	
public		$brands;
	
public		$paymentMethodType;
	
public		$recipientAccountReference;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}