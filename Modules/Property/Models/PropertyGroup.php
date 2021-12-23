<?php
namespace Plenty\Modules\Property\Models;


/**
 * Deprecated. Use V2 instead.The property group model. A property group allows to group several properties together and helps to structure properties. Property groups can have different names per language. The property group names have an own model.
 */
abstract class PropertyGroup 
{

	const MAX_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$position;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$options;
	
public		$names;
	
public		$properties;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}