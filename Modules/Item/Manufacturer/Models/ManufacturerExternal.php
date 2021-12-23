<?php
namespace Plenty\Modules\Item\Manufacturer\Models;


/**
 * The item manufacturer external model
 */
abstract class ManufacturerExternal 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$manufacturerId;
	
public		$marketId;
	
public		$value;
	
public		$manufacturer;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}