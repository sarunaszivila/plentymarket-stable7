<?php
namespace Plenty\Modules\Account\Contact\Events;

use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * The event is triggered after a contact has been updated
 */
abstract class AfterContactUpdate 
{

	abstract public function getContact(
	):Contact;

}