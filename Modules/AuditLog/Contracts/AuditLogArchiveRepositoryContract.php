<?php
namespace Plenty\Modules\AuditLog\Contracts;

use Plenty\Modules\AuditLog\Models\Archive;

/**
 * manage the audit log archive data
 */
interface AuditLogArchiveRepositoryContract 
{

	/**
	 * Search for available archive files.
	 */
	public function search(
		int $page = 1, 
		int $perPage = 12, 
		array $filters = []
	):array;

	/**
	 * Get the number of found archives, restricted by filters.
	 */
	public function count(
		array $filters = []
	):int;

	/**
	 * Restore an audit log archive and make it downloadable for approximately 2 days. There may be costs.
	 */
	public function restore(
		string $key
	);

	/**
	 * Get a signed url of an archive to download it.
	 */
	public function getSignedUrl(
		string $key
	):string;

}