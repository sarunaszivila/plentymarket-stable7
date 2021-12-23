<?php
namespace Plenty\Modules\Item\Item\Models;


/**
 * The item ebay title model
 */
abstract class ItemEbayTitle 
{

	const MAX_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$title;
	
public		$itemId;
	
public		$id;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}