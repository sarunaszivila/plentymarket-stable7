<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The message controls model. Currently supported controls:
 * <ul>
 * <li><tt>bool replyable</tt>
 *      Indicates whether or not is allowed to reply to this message stream (default true).
 *      It is a global control and effects only in the parent message of a stream.</li>
 * <li><tt>bool attachable</tt>
 *      Indicates whether or not is allowed to attach files in a message (default true).
 *      It is a global control and effects only in the parent message of a stream.</li>
 * <li><tt>bool linksDisabled</tt>
 *      Indicates whether or not the message links should be disabled (default false).
 *      It is a loacal control and effects every message.</li>
 * </ul>
 */
abstract class MessageMetaDataControls 
{
	
public		$replyable;
	
public		$attachable;
	
public		$linksDisabled;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}