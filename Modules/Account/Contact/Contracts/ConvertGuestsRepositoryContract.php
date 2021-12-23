<?php
namespace Plenty\Modules\Account\Contact\Contracts;

use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * The ConvertGuestsRepositoryContract is the interface for the convert guest repository. The interface allows you to convert guests into contacts.
 */
interface ConvertGuestsRepositoryContract 
{

	public function convertGuestByContactId(
		int $contactId
	):Contact;

	public function convertGuestByAddressId(
		int $addressId
	):Contact;

}