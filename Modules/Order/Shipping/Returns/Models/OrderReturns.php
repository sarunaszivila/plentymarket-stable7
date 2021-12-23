<?php
namespace Plenty\Modules\Order\Shipping\Returns\Models;


/**
 * The model for OrderReturns
 */
abstract class OrderReturns 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$orderId;
	
public		$returnsOrderId;
	
public		$providerId;
	
public		$createdAt;
	
public		$fileName;
	
public		$externalNumber;
	
public		$externalData;
	
public		$availableUntil;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}