<?php
namespace Plenty\Modules\Item\Attribute\Models;


/**
 * The AttributeValueMap model
 */
abstract class AttributeValueMap 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$marketId;
	
public		$attributeId;
	
public		$attributeValueId;
	
public		$name;
	
public		$marketInformation1;
	
public		$marketInformation2;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}