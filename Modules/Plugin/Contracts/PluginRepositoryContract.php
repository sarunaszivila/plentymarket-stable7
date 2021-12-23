<?php
namespace Plenty\Modules\Plugin\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Plugin\Models\Plugin;
use Plenty\Modules\Plugin\PluginSet\Models\PluginSet;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Search plugins according to parameters
 */
interface PluginRepositoryContract 
{

	public function getPluginByName(
		string $name
	):Plugin;

	/**
	 * Search plugins using filters. Example: searchPlugins(['name' => 'PluginIWantToFind'])
	 */
	public function searchPlugins(
		array $params = [], 
		int $itemsPerPage = \Plenty\Modules\Plugin\Models\Plugin::DEFAULT_ITEMS_PER_PAGE
	):PaginatedResult;

	public function getPluginSets(
		int $pluginId
	):array;

	public function isActiveInPluginSet(
		int $pluginId, 
		 $pluginSetIdOrPluginSet
	):bool;

	public function isActiveInPluginSetByName(
		string $pluginName, 
		int $pluginSetId
	):bool;

	public function isActiveInWebstore(
		int $pluginId, 
		int $webstoreId
	):bool;

	public function isActiveInWebstoreByPluginName(
		string $pluginName, 
		int $webstoreId
	):bool;

	public function decoratePlugin(
		Plugin $plugin, 
		int $pluginSetId = null
	):Plugin;

	public function installMarketplacePluginByItemId(
		int $marketplacePluginItemId, 
		int $pluginSetId = null
	);

}