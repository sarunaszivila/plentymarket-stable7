<?php
namespace Plenty\Modules\Property\Models;


/**
 * Deprecated. Use V2 instead.The property market model.
 */
abstract class PropertyMarket 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$propertyId;
	
public		$referrerId;
	
public		$referrerSubId;
	
public		$value;
	
public		$createdAt;
	
public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}