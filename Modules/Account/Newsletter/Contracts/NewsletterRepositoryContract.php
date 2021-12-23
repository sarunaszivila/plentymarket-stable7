<?php
namespace Plenty\Modules\Account\Newsletter\Contracts;

use Plenty\Modules\Account\Newsletter\Exceptions\NewsletterException;
use Plenty\Modules\Account\Newsletter\Models\Entry;
use Plenty\Modules\Account\Newsletter\Models\Folder;
use Plenty\Modules\Account\Newsletter\Models\Recipient;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The NewsletterRepositoryContract is the interface for the newsletter repository. This interface allows to assign email addresses of recipients to email folders. Depending on the settings selected for each email folder, different newsletters can be sent to different target groups.
 */
interface NewsletterRepositoryContract 
{

	/**
	 * Creates an entry.
	 */
	public function createEntry(
		array $data = []
	):Entry;

	/**
	 * Creates a recipient for an existing folder.
	 */
	public function createRecipient(
		array $data = []
	):array;

	/**
	 * Creates a folder.
	 */
	public function createFolder(
		array $data = []
	):Folder;

	/**
	 * Deletes all entries.
	 */
	public function deleteAllEntries(
	):array;

	/**
	 * Deletes all folders.
	 */
	public function deleteAllFolders(
	):array;

	/**
	 * Deletes all recipients.
	 */
	public function deleteAllRecipients(
	):array;

	/**
	 * Deletes an entry. The ID of the entry must be specified.
	 */
	public function deleteEntryById(
		int $entryId
	):Entry;

	/**
	 * Deletes a folder. The ID of the folder must be specified.
	 */
	public function deleteFolderById(
		int $folderId
	):Folder;

	/**
	 * Deletes a recipient. The ID of the recipient must be specified.
	 */
	public function deleteRecipientById(
		int $recipientId
	):Recipient;

	/**
	 * Lists all newsletter entries.
	 */
	public function listAllEntries(
	):array;

	/**
	 * Lists all newsletter folders.
	 */
	public function listAllFolders(
	):array;

	/**
	 * Lists all recipients.
	 */
	public function listAllRecipients(
		array $data = []
	):array;

	/**
	 * Returns recipients by the email address.
	 */
	public function getRecipientsByEMail(
		string $email
	):array;

	/**
	 * Lists all recipients.
	 */
	public function listRecipients(
		array $columns, 
		int $page, 
		int $itemsPerPage, 
		array $filter, 
		array $with
	):PaginatedResult;

	/**
	 * Gets details by the entry ID.
	 */
	public function listEntryById(
		int $entryId
	):Entry;

	/**
	 * Gets details by the folder ID.
	 */
	public function listFolderById(
		int $folderId
	):Folder;

	/**
	 * Gets details by the recipient ID.
	 */
	public function listRecipientById(
		int $recipientId
	):Recipient;

	/**
	 * Updates an existing entry. The ID of the entry must be specified.
	 */
	public function updateEntryById(
		int $entryId, 
		array $data = []
	):Entry;

	/**
	 * Updates an existing folder. The ID of the folder must be specified.
	 */
	public function updateFolderById(
		int $folderId, 
		array $data = []
	):Folder;

	/**
	 * Updates an existing recipient. The ID of the recipient must be specified.
	 */
	public function updateRecipientById(
		int $recipientId, 
		array $data = []
	):Recipient;

	/**
	 * Adds the email address of a contact or an interested party to an email folder for the newsletter list.
	 */
	public function addToNewsletterList(
		string $email, 
		string $forename = "", 
		string $surname = "", 
		array $emailDirIds = []
	);

}