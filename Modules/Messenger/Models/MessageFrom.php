<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The MessageFrom model of the messenger.
 */
abstract class MessageFrom 
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