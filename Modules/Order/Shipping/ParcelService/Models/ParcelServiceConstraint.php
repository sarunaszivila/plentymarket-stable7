<?php
namespace Plenty\Modules\Order\Shipping\ParcelService\Models;


/**
 * The Parcel Service Constraint Model
 */
abstract class ParcelServiceConstraint 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$parcelServiceRegionId;
	
public		$constraintType;
	
public		$subConstraintType;
	
public		$constraintLimit;
	
public		$cost;
	
public		$startValue;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}