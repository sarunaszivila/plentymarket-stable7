<?php
namespace Plenty\Modules\Order\Shipping\ParcelService\Models;


/**
 * The Parcel Service Name Model
 */
abstract class ParcelServiceName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$parcelServiceId;
	
public		$name;
	
public		$lang;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}