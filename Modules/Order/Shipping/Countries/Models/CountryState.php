<?php
namespace Plenty\Modules\Order\Shipping\Countries\Models;


/**
 * The CountryState model representing a state which belongs to a country specified by the countryId.
 */
abstract class CountryState 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$countryId;
	
public		$isoCode;
	
public		$name;
	
public		$isoCode3166;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}