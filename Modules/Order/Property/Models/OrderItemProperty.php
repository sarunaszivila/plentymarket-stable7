<?php
namespace Plenty\Modules\Order\Property\Models;


/**
 * The order item property model.
 */
abstract class OrderItemProperty 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$orderItemId;
	
public		$typeId;
	
public		$value;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$orderItem;
	
public		$type;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}