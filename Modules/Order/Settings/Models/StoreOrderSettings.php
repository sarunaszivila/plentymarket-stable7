<?php
namespace Plenty\Modules\Order\Settings\Models;


/**
 * The model of the store order settings.
 */
abstract class StoreOrderSettings 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$defaultLanguage;
	
public		$defaultParcelServiceId;
	
public		$defaultParcelServicePresetId;
	
public		$defaultMethodOfPaymentId;
	
public		$defaultCustomerClassId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}