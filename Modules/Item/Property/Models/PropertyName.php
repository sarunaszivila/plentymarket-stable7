<?php
namespace Plenty\Modules\Item\Property\Models;


/**
 * The PropertyName including Property
 */
abstract class PropertyName 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$propertyId;
	
public		$lang;
	
public		$name;
	
public		$description;
	
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