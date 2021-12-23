<?php
namespace Plenty\Modules\Property\V2\Models;


/**
 * The property group name model.
 */
abstract class PropertyGroupName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$groupId;
	
public		$lang;
	
public		$name;
	
public		$description;
	
public		$createdAt;
	
public		$updatedAt;
	
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