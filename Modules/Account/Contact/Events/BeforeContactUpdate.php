<?php
namespace Plenty\Modules\Account\Contact\Events;

use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * The event is triggered before a contact is being updated.
 */
abstract class BeforeContactUpdate 
{

	abstract public function getContact(
	):Contact;

}