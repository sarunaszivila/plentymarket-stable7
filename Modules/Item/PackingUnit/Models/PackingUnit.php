<?php
namespace Plenty\Modules\Item\PackingUnit\Models;


/**
 * The model that holds the names of the item variation packing units
 */
abstract class PackingUnit 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$unitId;
	
public		$unitNameEN;
	
public		$unitNameDE;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}