<?php
namespace Plenty\Modules\Property\V2\Models;


/**
 * The property group model.
 */
abstract class PropertyGroup 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$position;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$names;
	
public		$options;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}