<?php
namespace Plenty\Modules\ElasticSync\Models\Sync;


/**
 * The synclog model.
 */
abstract class SyncLog 
{

	const MAX_ITEMS_PER_PAGE = 100;

	const MAX_CHARACTERS_NOTES = 500;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$syncId;
	
public		$syncHash;
	
public		$jobHash;
	
public		$hashDate;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$syncLog;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}