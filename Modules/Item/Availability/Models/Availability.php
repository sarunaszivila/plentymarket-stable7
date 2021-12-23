<?php
namespace Plenty\Modules\Item\Availability\Models;


/**
 * The item availability model
 */
abstract class Availability 
{

	const ALLOWED_IDS = [1,2,3,4,5,6,7,8,9,10];

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$icon;
	
public		$averageDays;
	
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