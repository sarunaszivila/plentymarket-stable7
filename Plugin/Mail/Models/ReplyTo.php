<?php
namespace Plenty\Plugin\Mail\Models;


/**
 * ReplyTo
 */
abstract class ReplyTo 
{
	
public		$mailAddress;
	
public		$name;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}