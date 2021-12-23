<?php
namespace Plenty\Modules\Account\Contact\Events;

use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * The event is triggered before a contact is being created.
 */
abstract class BeforeContactCreate 
{

	abstract public function getContact(
	):Contact;

}