<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The MessageReferrer model of the messenger.
 */
abstract class MessageReferrer 
{
	
public		$type;
	
public		$value;
	
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