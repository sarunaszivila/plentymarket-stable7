<?php
namespace Plenty\Modules\Webshop\Template\Contracts;

use IO\Services\TemplateConfigService;

/**
 * Set configuration values from the plugin to be considered in internal functions.
 */
interface TemplateConfigRepositoryContract 
{

	/**
	 * Register an internal configuration.
	 */
	public function registerConfigValue(
		string $key, 
		 $value
	):TemplateConfigRepositoryContract;

}