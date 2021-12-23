<?php
namespace Plenty\Modules\Property\V2\Models;


/**
 * The property option model.
 */
abstract class PropertyOption 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$propertyId;
	
public		$type;
	
public		$value;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$property;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}