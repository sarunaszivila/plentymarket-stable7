<?php
namespace Plenty\Modules\AuditLog\Models;


/**
 * Contains the configuration for one audit log entity
 */
abstract class SystemConfigEntry 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$entity;
	
public		$active;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}