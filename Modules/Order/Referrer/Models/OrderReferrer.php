<?php
namespace Plenty\Modules\Order\Referrer\Models;


/**
 * The order referrer model. An order referrer shows where a purchase was originally made.
 */
abstract class OrderReferrer 
{

	const MIN_VALUE = 9;

	const MAX_VALUE = 100;

	const REFERRER_MANUAL = 0;

	const REFERRER_WEBSTORE = 1;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$isEditable;
	
public		$backendName;
	
public		$name;
	
public		$orderOwnerId;
	
public		$isFilterable;
	
public		$origin;
	
public		$showInLeads;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}