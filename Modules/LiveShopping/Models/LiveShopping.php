<?php
namespace Plenty\Modules\LiveShopping\Models;


/**
 * The LiveShopping data model.
 */
abstract class LiveShopping 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$fromTime;
	
public		$toTime;
	
public		$itemId;
	
public		$quantitySold;
	
public		$quantitySoldReal;
	
public		$quantityMax;
	
public		$liveShoppingId;
	
public		$link;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}