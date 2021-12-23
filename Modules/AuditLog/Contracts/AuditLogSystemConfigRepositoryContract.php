<?php
namespace Plenty\Modules\AuditLog\Contracts;

use Plenty\Modules\AuditLog\Models\SystemConfig;

/**
 * Configure the audit log configuration
 */
interface AuditLogSystemConfigRepositoryContract 
{

	/**
	 * Save a audit log system config
	 */
	public function save(
		SystemConfig $systemConfig
	):SystemConfig;

	/**
	 * Get the current audit log system config
	 */
	public function get(
	):SystemConfig;

}