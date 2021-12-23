<?php
namespace Plenty\Modules\Item\Attribute\Models;


/**
 * The AttributeEbayCorrelation model
 */
abstract class AttributeEbayCorrelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$attributeId;
	
public		$ebaySiteId;
	
public		$ebayCategoryId;
	
public		$ebayAttributeName;
	
public		$useForPictures;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}