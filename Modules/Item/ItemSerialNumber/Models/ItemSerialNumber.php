<?php
namespace Plenty\Modules\Item\ItemSerialNumber\Models;


/**
 * The item serial number model
 */
abstract class ItemSerialNumber 
{

	const CREATED_AT = 'inserted';

	const UPDATED_AT = '';

	const ITEMS_PER_PAGE = 100;
	
public		$id;
	
public		$orderId;
	
public		$orderItemId;
	
public		$itemId;
	
public		$serialNumber;
	
public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}