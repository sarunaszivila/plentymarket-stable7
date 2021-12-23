<?php
namespace Plenty\Modules\Order\Currency\Models;


/**
 * The currency exchange rate model.
 */
abstract class CurrencyExchangeRate 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$exchangeRate;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}