<?php
namespace Plenty\Modules\Property\V2\Models;


/**
 * The property group relation model. The model shows which property is related to which property group.
 */
abstract class PropertyGroupRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$propertyId;
	
public		$groupId;
	
public		$group;
	
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