<?php
namespace Plenty\Modules\Order\Status\Models;


/**
 * The order status model
 */
abstract class OrderStatus 
{

	const ORDER_STATUS_MIN_VALUE = 1;

	const ORDER_STATUS_MAX_VALUE = 19.9999;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$statusId;
	
public		$isErasable;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$isFrontendVisible;
	
public		$isReorderVisible;
	
public		$isRedistributionVisible;
	
public		$color;
	
public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}