<?php
namespace Plenty\Modules\Category\Models;


/**
 * The Category Property
 */
abstract class CategoryProperty 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$categoryId;
	
public		$marketId;
	
public		$plentyId;
	
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