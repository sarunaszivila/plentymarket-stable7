<?php
namespace Plenty\Modules\Order\TaricVatAssignment\Models;


/**
 * The taric code use model.
 */
abstract class TaricVatAssignmentUsed 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$taricCode;
	
public		$isUsed;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}