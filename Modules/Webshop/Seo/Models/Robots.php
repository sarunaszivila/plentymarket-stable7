<?php
namespace Plenty\Modules\Webshop\Seo\Models;


/**
 * Model for the configured content of the robots.txt
 */
abstract class Robots 
{
	
public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}