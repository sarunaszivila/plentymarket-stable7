<?php
namespace Plenty\Modules\Accounting\Vat\Models;


/**
 * The VAT rate model is always associated with a VAT configuration and contains the ID, name and percentage of a VAT rate. Each VAT configuration can have 4 rates.
 */
abstract class VatRate 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$vatRate;
	
public		$name;
	
public		$revenueAccount;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}