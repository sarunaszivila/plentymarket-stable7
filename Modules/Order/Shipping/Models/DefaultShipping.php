<?php
namespace Plenty\Modules\Order\Shipping\Models;


/**
 * The Default Shipping model is used to define the standard referrer, the standard shipping region and the payment methods.
 */
abstract class DefaultShipping 
{

	const CREATED_AT = 'created_at';

	const UPDATED_AT = 'updated_at';
	
public		$id;
	
public		$referrerId;
	
public		$shippingDestinationId;
	
public		$position;
	
public		$paymentMethod1;
	
public		$paymentMethod2;
	
public		$paymentMethod3;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}