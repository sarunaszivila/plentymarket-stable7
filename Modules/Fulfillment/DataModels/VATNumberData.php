<?php
namespace Plenty\Modules\Fulfillment\DataModels;


/**
 * The VAT number data model.
 */
abstract class VATNumberData 
{

	const TYPE_VAT_NUMBER = 'VAT_NUMBER';

	const TYPE_MARKET_TAX = 'MARKET_TAX';

	const TYPE_MARKET_EORI = 'MARKET_EORI';

	const TYPE_EORI = 'EORI';
	
public		$type;
	
public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}