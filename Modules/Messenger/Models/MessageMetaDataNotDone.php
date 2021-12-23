<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The MessageMetaDataNotDone model of the messenger.
 */
abstract class MessageMetaDataNotDone 
{
	
public		$deactivated;
	
public		$tooltips;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}