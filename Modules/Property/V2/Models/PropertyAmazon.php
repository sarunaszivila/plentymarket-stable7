<?php
namespace Plenty\Modules\Property\V2\Models;


/**
 * The property amazon model.
 */
abstract class PropertyAmazon 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$propertyId;
	
public		$platform;
	
public		$category;
	
public		$field;
	
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