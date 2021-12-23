<?php
namespace Plenty\Modules\Plugin\Contracts;

use Plenty\Modules\Plugin\Models\Configuration;
use Plenty\Modules\Plugin\PluginSet\Models\PluginSetEntry;

/**
 * Save config values for plugins
 */
interface ConfigurationRepositoryContract 
{

	public function saveConfiguration(
		int $pluginId, 
		array $configMap, 
		int $setId = null, 
		bool $resetCache = true
	):array;

	public function copyToPluginSetEntry(
		 $configurationOrId, 
		 $pluginSetEntryOrId
	):int;

	public function getConfigurationFile(
		int $pluginId, 
		int $setId
	):string;

	public function export(
		int $setId, 
		int $pluginId = null, 
		bool $active = null
	):array;

	public function import(
		int $setId, 
		array $data, 
		int $pluginId = null
	);

}