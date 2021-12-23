<?php
namespace Plenty\Modules\Order\Settings\Models;


/**
 * The model of the order settings.
 */
abstract class OrderSettings 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$warehouseAssignment;
	
public		$cancelStatusFrom;
	
public		$cancelStatusTo;
	
public		$orderItemPrefixes;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}