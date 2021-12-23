<?php
namespace Plenty\Modules\Account\OrderSummary\Models;


/**
 * The model of the order summary settings.
 */
abstract class OrderSummarySettings 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$customerTypeIds;
	
public		$customerClassIds;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}