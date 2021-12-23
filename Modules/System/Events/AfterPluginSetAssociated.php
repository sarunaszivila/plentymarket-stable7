<?php
namespace Plenty\Modules\System\Events;

use Plenty\Modules\Plugin\PluginSet\Models\PluginSet;
use Plenty\Modules\System\Models\Webstore;

/**
 * Event after a plugin set is assigned to a webstore.
 */
abstract class AfterPluginSetAssociated 
{

	/**
	 * Get the webstore the plugin set was associated with.
	 */
	abstract public function getWebstore(
	):Webstore;

	/**
	 * Get the newly associated plugin set.
	 */
	abstract public function getPluginSet(
	):PluginSet;

}