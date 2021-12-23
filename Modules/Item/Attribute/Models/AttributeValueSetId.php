<?php
namespace Plenty\Modules\Item\Attribute\Models;


/**
 * The AttributeValueSetId model
 */
abstract class AttributeValueSetId 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$hash;
	
public		$amazon_variation_set;
	
public		$size;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}