<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The MessageMetaLink model of the messenger.
 */
abstract class MessageMetaLink 
{

	const TYPE_MAILTO = 'mailto';

	const TYPE_URL = 'url';

	const TYPE_PLUGIN = 'plugin';

	const TYPE_REPLY = 'reply';
	
public		$image;
	
public		$caption;
	
public		$url;
	
public		$type;
	
public		$content;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}