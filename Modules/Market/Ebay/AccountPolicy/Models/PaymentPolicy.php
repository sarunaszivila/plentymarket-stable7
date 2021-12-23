<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Models;


/**
 * The eBay payment policy model
 */
abstract class PaymentPolicy 
{
	
public		$paymentPolicyId;
	
public		$categoryTypes;
	
public		$deposit;
	
public		$description;
	
public		$fullPaymentDueIn;
	
public		$immediatePay;
	
public		$marketplaceId;
	
public		$name;
	
public		$paymentInstructions;
	
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