<?php
namespace Plenty\Modules\ItemSet\Models;


/**
 * The ItemSetComponent model.
 */
abstract class ItemSetComponent 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$setId;
	
public		$itemId;
	
public		$minimalOrderQuantity;
	
public		$maximumOrderQuantity;
	
public		$orderQuantityPossible;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}