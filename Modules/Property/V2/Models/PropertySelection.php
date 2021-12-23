<?php
namespace Plenty\Modules\Property\V2\Models;


/**
 * The property selection model.
 */
abstract class PropertySelection 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$propertyId;
	
public		$position;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$property;
	
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