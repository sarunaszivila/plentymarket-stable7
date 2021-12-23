<?php
namespace Plenty\Modules\Order\Booking\Models;


/**
 * The order booking model.
 */
abstract class OrderBooking 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$success;
	
public		$failed;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}