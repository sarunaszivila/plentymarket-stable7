<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order item reference model. Each OrderItemReference has a referenced OrderItem and a referenced type ('parent','bundle','campaign','reorder','set','order_property').
 */
abstract class OrderItemReference 
{

	const REFERENCE_TYPE_PARENT = 'parent';

	const REFERENCE_TYPE_BUNDLE = 'bundle';

	const REFERENCE_TYPE_CAMPAIGN = 'campaign';

	const REFERENCE_TYPE_REORDER = 'reorder';

	const REFERENCE_TYPE_SET = 'set';

	const REFERENCE_TYPE_ORDER_PROPERTY = 'order_property';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$orderItemId;
	
public		$referenceOrderItemId;
	
public		$referenceType;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$orderItem;
	
public		$referencedOrderItem;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}