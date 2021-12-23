<?php
namespace Plenty\Modules\Property\Models;


/**
 * Deprecated. Use V2 instead.The property relation model allows to relate a property e.g. to a variation or other targets.
 */
abstract class PropertyRelation 
{

	const MAX_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$propertyId;
	
public		$relationTypeIdentifier;
	
public		$relationTargetId;
	
public		$selectionRelationId;
	
public		$groupId;
	
public		$markup;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$relationValues;
	
public		$propertyRelation;
	
public		$group;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}