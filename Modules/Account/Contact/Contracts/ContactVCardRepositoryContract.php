<?php
namespace Plenty\Modules\Account\Contact\Contracts;


/**
 * The ContractVCardRepositoryContract is the interface for the vcard repository. The interface allows you to return a vcard filestream.
 */
interface ContactVCardRepositoryContract 
{

	/**
	 * Gets a filestream of the vcard of a contact.
	 */
	public function getVCard(
		int $contactId
	):array;

}