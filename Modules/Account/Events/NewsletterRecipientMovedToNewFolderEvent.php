<?php
namespace Plenty\Modules\Account\Events;

use Plenty\Modules\Account\Newsletter\Models\Recipient;

/**
 * This event will be triggered, after a recipient was moved to a new folder.
 */
abstract class NewsletterRecipientMovedToNewFolderEvent 
{

	/**
	 * returns old folder id.
	 */
	abstract public function getOldFolder(
	):int;

	/**
	 * returns recipient.
	 */
	abstract public function getRecipient(
	):Recipient;

}