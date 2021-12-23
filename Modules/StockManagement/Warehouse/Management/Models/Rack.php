<?php
namespace Plenty\Modules\StockManagement\Warehouse\Management\Models;


/**
 * The storage rack model
 */
abstract class Rack 
{

	const CREATED_AT = 'created_at';

	const UPDATED_AT = 'updated_at';
	
public		$id;
	
public		$name;
	
public		$position;
	
public		$warehouseId;
	
public		$zone;
	
public		$warehouse;
	
public		$shelves;
	
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