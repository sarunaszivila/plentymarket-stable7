<?php
namespace Plenty\Modules\ItemSet\Models;


/**
 * The ItemSetConfig model.
 */
abstract class ItemSetConfig 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$setId;
	
public		$rebate;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}