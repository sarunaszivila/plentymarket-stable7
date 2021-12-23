<?php
namespace Plenty\Modules\AuditLog\Models;


/**
 * Contains the information about one audit log entity
 */
abstract class Entity 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$key;
	
public		$requiredForCertificate;
	
public		$alwaysActive;
	
public		$free;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}