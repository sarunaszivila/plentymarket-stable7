<?php
namespace Plenty\Modules\Market\Ebay\Transaction\Models;


/**
 * The ebay transaction model.
 */
abstract class Transaction 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$orderId;
	
public		$market;
	
public		$externalListingId;
	
public		$credentialsId;
	
public		$buyerUserId;
	
public		$feedback;
	
public		$transactionId;
	
public		$endTime;
	
public		$quantity;
	
public		$title;
	
public		$price;
	
public		$shippingAddressCountry;
	
public		$referrerId;
	
public		$createdAt;
	
public		$notification;
	
public		$orderRowId;
	
public		$sku;
	
public		$lastUpdate;
	
public		$externalOrderId;
	
public		$externalReferenceNo;
	
public		$cancelId;
	
public		$isEbayPlus;
	
public		$isClickAndCollect;
	
public		$extendedOrderId;
	
public		$importStatus;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}