<?php
namespace Plenty\Modules\Property\V2\Models;


/**
 * The property group option model.
 */
abstract class PropertyGroupOption 
{

	const TYPE_SURCHARGE_TYPE = 'surchargeType';

	const TYPE_GROUP_TYPE = 'groupType';

	const TYPES = ['surchargeType','groupType'];

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$groupId;
	
public		$type;
	
public		$value;
	
public		$createdAt;
	
public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}