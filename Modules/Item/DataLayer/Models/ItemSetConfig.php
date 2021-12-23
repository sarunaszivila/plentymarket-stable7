<?php
namespace Plenty\Modules\Item\DataLayer\Models;


/**
 * ItemSetConfig
 */
abstract class ItemSetConfig 
{
	
public		$id;
	
public		$rebate;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}