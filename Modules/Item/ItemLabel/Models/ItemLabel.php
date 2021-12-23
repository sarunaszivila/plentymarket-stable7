<?php
namespace Plenty\Modules\Item\ItemLabel\Models;


/**
 * The item label model
 */
abstract class ItemLabel 
{

	const ITEMS_PER_PAGE = 100;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$labelId;
	
public		$itemId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}