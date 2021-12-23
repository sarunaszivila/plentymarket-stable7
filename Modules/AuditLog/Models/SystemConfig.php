<?php
namespace Plenty\Modules\AuditLog\Models;


/**
 * Contains entries, which should be saved
 */
abstract class SystemConfig 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$entries;
	
public		$archiveActive;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}