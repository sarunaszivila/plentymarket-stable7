<?php
namespace Plenty\Modules\AuditLog\Models;


/**
 * Contains the entities depending to a group
 */
abstract class EntityGroup 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$name;
	
public		$entities;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}