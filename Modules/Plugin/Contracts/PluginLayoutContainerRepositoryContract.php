<?php
namespace Plenty\Modules\Plugin\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Plugin\Models\LayoutContainer;
use Plenty\Modules\Plugin\PluginSet\Models\PluginSet;

/**
 * Plugin layout container
 */
interface PluginLayoutContainerRepositoryContract 
{

	public function all(
		int $pluginSetId
	);

	public function updateAll(
		array $dataList, 
		int $pluginSetId, 
		int $pluginId = null
	);

	public function getActiveLinkedLayoutContainers(
		array $activeContainerKeysList, 
		array $activeDataProviderKeysList, 
		int $pluginSetId = null
	);

	public function getActiveLinkedLayoutContainersByPluginSetId(
		array $activeContainerKeysList, 
		array $activeDataProviderKeysList, 
		int $pluginSetId
	);

	public function addNew(
		array $dataList, 
		int $pluginSetId
	);

	public function addOne(
		int $pluginSetId, 
		string $containerKey, 
		string $dataProviderKey, 
		int $containerPluginId = null, 
		int $dataProviderPluginId = null
	);

	public function removeOne(
		int $pluginSetId, 
		string $containerKey, 
		string $dataProviderKey, 
		int $containerPluginId = null, 
		int $dataProviderPluginId = null
	);

	public function exportByPluginSetId(
		 $pluginSetOrId
	):array;

	public function importByPluginSetId(
		 $pluginSetOrId, 
		array $containers
	);

}