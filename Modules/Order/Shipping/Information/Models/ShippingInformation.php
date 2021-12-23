<?php
namespace Plenty\Modules\Order\Shipping\Information\Models;


/**
 * The ShippingInformationModel represents additional shipping information for an order.
 */
abstract class ShippingInformation 
{

	const MAX_ITEMS_PER_PAGE = 100;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$orderId;
	
public		$shippingServiceProvider;
	
public		$transactionId;
	
public		$shippingStatus;
	
public		$shippingCosts;
	
public		$additionalData;
	
public		$registrationAt;
	
public		$shipmentAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}