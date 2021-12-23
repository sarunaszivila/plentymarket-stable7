<?php
namespace Plenty\Modules\AuditLog\Contracts;

use Plenty\Modules\AuditLog\Models\File;

/**
 * get audit log files
 */
interface AuditLogExportRepositoryContract 
{

	/**
	 * Get all available files
	 */
	public function all(
	):array;

	/**
	 * Get a signed url of an archive to download it.
	 */
	public function getSignedUrl(
		string $key
	):string;

}