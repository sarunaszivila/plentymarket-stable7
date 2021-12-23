<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The MessageLinkedTo model of the messenger.
 */
abstract class MessageLinkedTo 
{
	
public		$type;
	
public		$value;
	
public		$typeId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}