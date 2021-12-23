<?php
namespace Plenty\Modules\Market\Accounts\Models;


/**
 * The market account model
 */
abstract class Market 
{
	
public		$accounts;
	
public		$referrerId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}