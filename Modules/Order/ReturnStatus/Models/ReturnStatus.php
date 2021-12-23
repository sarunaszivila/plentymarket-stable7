<?php
namespace Plenty\Modules\Order\ReturnStatus\Models;


/**
 * The return status model.
 */
abstract class ReturnStatus 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$status;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}