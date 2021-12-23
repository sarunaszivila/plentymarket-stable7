<?php
namespace Plenty\Modules\AuditLog\Models;


/**
 * Contains informations about one file
 */
abstract class File 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$file;
	
public		$month;
	
public		$year;
	
public		$day;
	
public		$size;
	
public		$estimatedDeletionDate;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}