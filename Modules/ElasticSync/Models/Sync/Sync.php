<?php
namespace Plenty\Modules\ElasticSync\Models\Sync;


/**
 * The sync model.
 */
abstract class Sync 
{

	const MAX_ITEMS_PER_PAGE = 100;

	const MAX_CHARACTERS_NOTES = 500;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$data;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$sync;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}