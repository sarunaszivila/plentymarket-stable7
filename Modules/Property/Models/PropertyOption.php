<?php
namespace Plenty\Modules\Property\Models;


/**
 * Deprecated. Use V2 instead.The property option model. Property options allow to add further specification to a property. Each property option can have several values. The porperty option values have an own model.
 */
abstract class PropertyOption 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$propertyId;
	
public		$typeOptionIdentifier;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$propertyOptionValues;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}