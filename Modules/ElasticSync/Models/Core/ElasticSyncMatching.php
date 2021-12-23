<?php
namespace Plenty\Modules\ElasticSync\Models\Core;


/**
 * The elastic sync matching model.
 */
abstract class ElasticSyncMatching 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$syncId;
	
public		$target;
	
public		$source;
	
public		$additionalValue;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}