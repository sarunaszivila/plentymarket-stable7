<?php
namespace Plenty\Modules\Account\Contact\Contracts;


/**
 * The ContactAccessDataRepositoryContract is the interface for the contact access data repository. This interface allows to reset and change contact password, get a login URL and unblock users.
 */
interface ContactAccessDataRepositoryContract 
{

	/**
	 * Updates the password for a contact.
	 */
	public function updatePassword(
		int $contactId, 
		array $data
	);

	/**
	 * Sends a new password to the contact.
	 */
	public function sendNewCustomerPassword(
		int $contactId
	);

	/**
	 * Unblocks the user.
	 */
	public function unblockUser(
		int $contactId
	);

	/**
	 * Gets the login URL.
	 */
	public function getLoginURL(
		int $contactId
	);

}