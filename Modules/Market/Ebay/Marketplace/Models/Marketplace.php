<?php
namespace Plenty\Modules\Market\Ebay\Marketplace\Models;


/**
 * The eBay marketplace model.
 */
abstract class Marketplace 
{
	
public		$siteId;
	
public		$marketplaceId;
	
public		$marketId;
	
public		$referrerId;
	
public		$shortcut;
	
public		$currency;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}