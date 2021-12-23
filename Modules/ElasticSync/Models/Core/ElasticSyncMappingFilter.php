<?php
namespace Plenty\Modules\ElasticSync\Models\Core;


/**
 * The elastic sync mapping filter model.
 */
abstract class ElasticSyncMappingFilter 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$mappingId;
	
public		$type;
	
public		$operator;
	
public		$source;
	
public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}