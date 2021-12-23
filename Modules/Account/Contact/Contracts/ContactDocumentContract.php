<?php
namespace Plenty\Modules\Account\Contact\Contracts;

use Plenty\Modules\Cloud\Storage\Models\StorageObject;
use Plenty\Modules\Cloud\Storage\Models\StorageObjectList;

/**
 * The ContactDocumentContract is the interface for contact documents.
 */
interface ContactDocumentContract 
{

	/**
	 * List documents of a contact
	 */
	public function listDocuments(
		string $continuationToken, 
		int $contactId
	):StorageObjectList;

	/**
	 * Get storage object from contact documents
	 */
	public function getDocument(
		string $key, 
		int $contactId
	):StorageObject;

	/**
	 * Get temporary url for document
	 */
	public function getDocumentUrl(
		string $key, 
		int $contactId
	):string;

	/**
	 * Upload document to contact directory
	 */
	public function uploadDocument(
		string $key, 
		string $content, 
		int $contactId
	):StorageObject;

	/**
	 * Delete files from contact documents
	 */
	public function deleteDocuments(
		array $keyList, 
		int $contactId
	):bool;

}