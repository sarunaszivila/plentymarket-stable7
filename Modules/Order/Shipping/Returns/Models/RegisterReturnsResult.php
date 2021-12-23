<?php
namespace Plenty\Modules\Order\Shipping\Returns\Models;


/**
 * The model for RegisterReturnsResult
 */
abstract class RegisterReturnsResult 
{
	
public		$orderReturnsList;
	
public		$failedRegisterOrderReturnsList;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}