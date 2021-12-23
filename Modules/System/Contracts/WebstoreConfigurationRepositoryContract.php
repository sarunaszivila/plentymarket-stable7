<?php
namespace Plenty\Modules\System\Contracts;

use Plenty\Modules\System\Models\Webstore;
use Plenty\Modules\System\Models\WebstoreConfiguration;

/**
 * Repository for Webstore Configuration
 */
interface WebstoreConfigurationRepositoryContract 
{

	/**
	 * Get the WebstoreConfiguration by plentyId
	 */
	public function findByPlentyId(
		int $plentyId
	):WebstoreConfiguration;

	/**
	 * Get the WebstoreConfiguration by webstoreId
	 */
	public function findByWebstoreId(
		int $webstoreId
	):WebstoreConfiguration;

	public function updateByPlentyId(
		array $data, 
		int $plentyId
	):WebstoreConfiguration;

}