<?php
namespace Plenty\Modules\Market\Accounts\Models;


/**
 * The market account model
 */
abstract class Account 
{
	
public		$accountId;
	
public		$label;
	
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