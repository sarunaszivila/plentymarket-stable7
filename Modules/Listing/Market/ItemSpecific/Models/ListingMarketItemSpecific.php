<?php
namespace Plenty\Modules\Listing\Market\ItemSpecific\Models;


/**
 * The item specific model.
 */
abstract class ListingMarketItemSpecific 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$listingMarketId;
	
public		$name;
	
public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}