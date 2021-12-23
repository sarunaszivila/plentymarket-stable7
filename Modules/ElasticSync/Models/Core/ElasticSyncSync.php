<?php
namespace Plenty\Modules\ElasticSync\Models\Core;


/**
 * The elastic sync sync model.
 */
abstract class ElasticSyncSync 
{

	const MAX_ITEMS_PER_PAGE = 100;

	const MAX_CHARACTERS_NOTES = 500;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$name;
	
public		$syncType;
	
public		$sourceType;
	
public		$sourceDataType;
	
public		$lastRun;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$matching;
	
public		$options;
	
public		$mappings;
	
public		$reports;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}