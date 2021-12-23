<?php
namespace Plenty\Modules\BI\RawData\Models;


/**
 * List of all saved raw data configurations
 */
abstract class RawDataConfigs 
{
	
public		$plentyIdHash;
	
public		$configs;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}