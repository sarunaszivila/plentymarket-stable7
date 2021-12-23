<?php
namespace Plenty\Modules\Messenger\Events;

use Plenty\Modules\Messenger\Models\Message;

/**
 * The event is triggered after a new message was created.
 */
abstract class MessageCreated 
{

	/**
	 * If TRUE, the message is the first one. Otherwise, it is a reply message.
	 */
	abstract public function isFirstMessage(
	):bool;

	/**
	 * Get the message.
	 */
	abstract public function getMessage(
	):Message;

}