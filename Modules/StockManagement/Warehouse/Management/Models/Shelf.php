<?php
namespace Plenty\Modules\StockManagement\Warehouse\Management\Models;


/**
 * The storage shelf model
 */
abstract class Shelf 
{

	const CREATED_AT = 'created_at';

	const UPDATED_AT = 'updated_at';
	
public		$id;
	
public		$rackId;
	
public		$name;
	
public		$level;
	
public		$rack;
	
public		$storageLocations;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}