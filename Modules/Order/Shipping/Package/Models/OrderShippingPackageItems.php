<?php
namespace Plenty\Modules\Order\Shipping\Package\Models;


/**
 * The relation between package, item and variation model
 */
abstract class OrderShippingPackageItems 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$packageId;
	
public		$itemId;
	
public		$variationId;
	
public		$itemQuantity;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}