<?php
namespace Plenty\Modules\Property\Models;


/**
 * Deprecated. Use V2 instead.The property model. Properties allow to further describe items, categories etc. A property can have one name per language. The property names have an own model.
 */
abstract class Property 
{

	const MAX_ITEMS_PER_PAGE = 200;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$cast;
	
public		$position;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$names;
	
public		$options;
	
public		$relation;
	
public		$amazons;
	
public		$selections;
	
public		$groups;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}