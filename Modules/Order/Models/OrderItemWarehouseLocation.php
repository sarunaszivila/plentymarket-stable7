<?php
namespace Plenty\Modules\Order\Models;


/**
 * <b>DEPRECATED</b> The order item warehouse location model. Order item warehouse locations
 *                                             refer to the location of an order item, in a specific warehouse.
 */
abstract class OrderItemWarehouseLocation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$orderItemId;
	
public		$warehouseLocationId;
	
public		$quantity;
	
public		$bestBeforeDate;
	
public		$batch;
	
public		$warehouseLocation;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}