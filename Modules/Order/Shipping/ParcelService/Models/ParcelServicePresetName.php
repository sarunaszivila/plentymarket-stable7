<?php
namespace Plenty\Modules\Order\Shipping\ParcelService\Models;


/**
 * The Parcel Service Preset Name Model
 */
abstract class ParcelServicePresetName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$presetId;
	
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