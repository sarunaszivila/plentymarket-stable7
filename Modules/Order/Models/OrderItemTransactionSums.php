<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order item transaction sums model.
 */
abstract class OrderItemTransactionSums 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$orderItemId;
	
public		$quantityTransactionsInRegular;
	
public		$quantityTransactionsOutRegular;
	
public		$quantityTransactionsInCancelled;
	
public		$quantityTransactionsOutCancelled;
	
public		$priceTotalTransactionsInRegular;
	
public		$priceTotalTransactionsOutRegular;
	
public		$priceTotalTransactionsInCancelled;
	
public		$priceTotalTransactionsOutCancelled;
	
public		$areTransactionsInComplete;
	
public		$areTransactionsOutComplete;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}