<?php
namespace Plenty\Modules\Order\TaricVatAssignment\Models;


/**
 * The taric vat assignment model.
 */
abstract class TaricVatAssignment 
{

	const MAX_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$taricCode;
	
public		$countryId;
	
public		$vatField;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$taricVatAssignmentUsed;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}