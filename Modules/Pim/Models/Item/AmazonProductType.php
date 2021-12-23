<?php
namespace Plenty\Modules\Pim\Models\Item;


/**
 * The amazon product type model.
 */
abstract class AmazonProductType 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$genre;
	
public		$type;
	
public		$genreDescription;
	
public		$typeDescription;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}