<?php
namespace Plenty\Modules\Item\Variation\Services\ExportPreloadValue;


/**
 * ExportPreloadValue
 */
abstract class ExportPreloadValue 
{
	
public		$itemId;
	
public		$variationId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}