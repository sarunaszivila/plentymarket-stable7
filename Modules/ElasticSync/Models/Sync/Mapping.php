<?php
namespace Plenty\Modules\ElasticSync\Models\Sync;


/**
 * The mapping model.
 */
abstract class Mapping 
{

	const MAX_ITEMS_PER_PAGE = 100;

	const MAX_CHARACTERS_NOTES = 500;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$data;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$mapping;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}