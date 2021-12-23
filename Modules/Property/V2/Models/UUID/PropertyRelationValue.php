<?php
namespace Plenty\Modules\Property\V2\Models\UUID;


/**
 * The property uuid relation value model. Includes the values in different languages for properties of the type short text and long text.
 */
abstract class PropertyRelationValue 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$relationId;
	
public		$lang;
	
public		$value;
	
public		$description;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$relation;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}