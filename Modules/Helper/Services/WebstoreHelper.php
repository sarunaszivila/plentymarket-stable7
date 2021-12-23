<?php
namespace Plenty\Modules\Helper\Services;

use Plenty\Modules\System\Contracts\WebstoreConfigurationRepositoryContract;
use Plenty\Modules\System\Models\WebstoreConfiguration;

/**
 * Webstore Helper Service
 */
abstract class WebstoreHelper 
{

	/**
	 * Get the configuration of the current webstore.
	 */
	abstract public function getCurrentWebstoreConfiguration(
	):WebstoreConfiguration;

}