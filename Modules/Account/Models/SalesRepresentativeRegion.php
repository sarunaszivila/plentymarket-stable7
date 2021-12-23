<?php
namespace Plenty\Modules\Account\Models;


/**
 * Sales representative region model
 */
abstract class SalesRepresentativeRegion 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$accountContactRelationId;
	
public		$postalCodeArea;
	
public		$countryId;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$contacts;
	
public		$accounts;
	
public		$accountContactRelation;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}