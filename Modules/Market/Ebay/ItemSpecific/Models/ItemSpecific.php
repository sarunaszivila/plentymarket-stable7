<?php
namespace Plenty\Modules\Market\Ebay\ItemSpecific\Models;


/**
 * The eBay item specific model.
 */
abstract class ItemSpecific 
{
	
public		$name;
	
public		$minValues;
	
public		$maxValues;
	
public		$selectionMode;
	
public		$valueType;
	
public		$valueFormat;
	
public		$helpText;
	
public		$helpUrl;
	
public		$variationPicture;
	
public		$variationSpecifics;
	
public		$values;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}