<?php
namespace Plenty\Modules\Item\VariationAdditionalSku\Models;


/**
 * The variation additional SKU model for order import
 */
abstract class VariationAdditionalSku 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$variationId;
	
public		$marketId;
	
public		$marketAccountId;
	
public		$sku;
	
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