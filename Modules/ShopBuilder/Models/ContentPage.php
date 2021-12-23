<?php
namespace Plenty\Modules\ShopBuilder\Models;


/**
 * A content page provided by a frontend plugin.
 */
abstract class ContentPage 
{
	
public		$identifier;
	
public		$caption;
	
public		$dropzones;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}