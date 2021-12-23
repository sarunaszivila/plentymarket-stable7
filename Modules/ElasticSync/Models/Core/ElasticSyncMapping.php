<?php
namespace Plenty\Modules\ElasticSync\Models\Core;


/**
 * The elastic sync mapping model.
 */
abstract class ElasticSyncMapping 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$syncId;
	
public		$name;
	
public		$position;
	
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