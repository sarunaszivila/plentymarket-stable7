<?php
namespace Plenty\Modules\Property\Models;


/**
 * Deprecated. Use V2 instead.The property group name model. A property group can have several names. One name per language. Each name has a unique ID.
 */
abstract class PropertyGroupName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$propertyGroupId;
	
public		$lang;
	
public		$name;
	
public		$description;
	
public		$createdAt;
	
public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}