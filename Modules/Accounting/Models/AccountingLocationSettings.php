<?php
namespace Plenty\Modules\Accounting\Models;


/**
 * The accounting location settings model.
 */
abstract class AccountingLocationSettings 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$locationId;
	
public		$isInvoiceEUNet;
	
public		$isInvoiceExportNet;
	
public		$showShippingVat;
	
public		$isSmallBusiness;
	
public		$numberOfDecimalPlaces;
	
public		$roundTotalsOnly;
	
public		$isReverseCharge;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}