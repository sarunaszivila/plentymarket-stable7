<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Models;


/**
 * The eBay region set model
 */
abstract class RegionSet 
{
	
public		$regionExcluded;
	
public		$regionIncluded;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}