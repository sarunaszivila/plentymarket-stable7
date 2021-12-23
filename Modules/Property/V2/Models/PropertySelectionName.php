<?php
namespace Plenty\Modules\Property\V2\Models;


/**
 * The property selection name model.
 */
abstract class PropertySelectionName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$selectionId;
	
public		$lang;
	
public		$name;
	
public		$description;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$selection;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}