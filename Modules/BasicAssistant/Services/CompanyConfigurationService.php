<?php
namespace Plenty\Modules\BasicAssistant\Services;

use Plenty\Modules\Helper\Contracts\KeyValueStorageRepositoryContract;
use Plenty\Modules\System\Configuration\CompanyConfiguration;

/**
 * The CompanyConfigurationService is the service for getting company information.
 */
abstract class CompanyConfigurationService 
{

	abstract public function get(
	):array;

}