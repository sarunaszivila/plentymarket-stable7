<?php
namespace Plenty\Modules\Account\Contact\Events;

use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * The event is triggered after a contact has been created
 */
abstract class AfterContactCreate 
{

	abstract public function getContact(
	):Contact;

}