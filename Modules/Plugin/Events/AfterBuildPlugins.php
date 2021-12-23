<?php
namespace Plenty\Modules\Plugin\Events;

use Plenty\Modules\Plugin\PluginSet\Models\PluginSet;

/**
 * Event after plugin build has finished
 */
abstract class AfterBuildPlugins 
{

	/**
	 * Get the plugin set which have been built
	 */
	abstract public function getPluginSet(
	):PluginSet;

	/**
	 * Check if php files of a plugin have been changed
	 */
	abstract public function sourceHasChanged(
		string $pluginName
	):bool;

	/**
	 * Check if resource files of a plugin have been changed
	 */
	abstract public function resourcesHasChanged(
		string $pluginName
	):bool;

}