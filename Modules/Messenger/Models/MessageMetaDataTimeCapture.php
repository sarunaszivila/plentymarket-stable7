<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The MessageMetaDataTimeCapture model of the messenger.
 */
abstract class MessageMetaDataTimeCapture 
{
	
public		$chargeable;
	
public		$minutes;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}