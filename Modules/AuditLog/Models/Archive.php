<?php
namespace Plenty\Modules\AuditLog\Models;


/**
 * Contains informations about one archive file
 */
abstract class Archive 
{

	const STATUS_ARCHIVED = 'archived';

	const STATUS_ACCESSIBLE = ' accessible';

	const STATUS_RESTORE_IN_PROGRESS = 'restore_in_progress';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$file;
	
public		$month;
	
public		$year;
	
public		$size;
	
public		$status;
	
public		$estimatedDeletionDate;
	
public		$accessibleUntil;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}