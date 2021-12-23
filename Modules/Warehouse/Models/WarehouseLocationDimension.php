<?php
namespace Plenty\Modules\Warehouse\Models;


/**
 * The warehouse location dimension model.
 */
abstract class WarehouseLocationDimension 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$parentId;
	
public		$warehouseId;
	
public		$level;
	
public		$name;
	
public		$shortcut;
	
public		$separator;
	
public		$displayInName;
	
public		$isActiveForPickupPath;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$warehouseLocationLevel;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}