<?php
namespace Plenty\Modules\AuditLog\Contracts;

use Plenty\Modules\AuditLog\Models\Entity;
use Plenty\Modules\AuditLog\Models\EntityGroup;

/**
 * Get possible auditLog entities
 */
interface AuditLogEntitiesRepositoryContract 
{

	/**
	 * Get list of entity groups
	 */
	public function getGroups(
	):array;

	/**
	 * Get list of entities
	 */
	public function getEntities(
	):array;

}