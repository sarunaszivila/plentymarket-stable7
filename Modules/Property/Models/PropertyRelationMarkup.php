<?php
namespace Plenty\Modules\Property\Models;


/**
 * Deprecated. Use V2 instead.The property relation markup model.
 */
abstract class PropertyRelationMarkup 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$propertyRelationId;
	
public		$variationSalesPriceId;
	
public		$markup;
	
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