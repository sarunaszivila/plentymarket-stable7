<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Models;


/**
 * The eBay recipient account reference model
 */
abstract class RecipientAccountReference 
{
	
public		$referenceId;
	
public		$referenceType;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}