<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The MessageMetaData model of the messenger.
 */
abstract class MessageMetaData 
{
	
public		$readBy;
	
public		$links;
	
public		$notDoneByBackend;
	
public		$controls;
	
public		$timeCapture;
	
public		$plentyId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}