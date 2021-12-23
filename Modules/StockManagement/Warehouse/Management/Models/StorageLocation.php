<?php
namespace Plenty\Modules\StockManagement\Warehouse\Management\Models;


/**
 * The storage location model
 */
abstract class StorageLocation 
{

	const CREATED_AT = 'created_at';

	const UPDATED_AT = 'updated_at';
	
public		$id;
	
public		$warehouseId;
	
public		$rackId;
	
public		$shelfId;
	
public		$name;
	
public		$type;
	
public		$position;
	
public		$warehouse;
	
public		$rack;
	
public		$shelf;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}