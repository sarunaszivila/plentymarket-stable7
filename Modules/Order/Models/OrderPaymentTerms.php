<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order payment terms model.
 */
abstract class OrderPaymentTerms 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$orderId;
	
public		$earlyPaymentDiscount;
	
public		$earlyPaymentDiscountDays;
	
public		$valutaDays;
	
public		$paymentAllowedDays;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$order;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}