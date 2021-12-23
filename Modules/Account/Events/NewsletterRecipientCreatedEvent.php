<?php
namespace Plenty\Modules\Account\Events;

use Plenty\Modules\Account\Newsletter\Models\Recipient;

/**
 * This event will be triggered, after a recipient was created.
 */
abstract class NewsletterRecipientCreatedEvent 
{

	/**
	 * returns recipient.
	 */
	abstract public function getRecipient(
	):Recipient;

}