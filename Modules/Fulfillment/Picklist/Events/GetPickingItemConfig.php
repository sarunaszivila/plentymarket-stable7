<?php
namespace Plenty\Modules\Fulfillment\Picklist\Events;


/**
 * This event will be triggered, when an item is picked
 */
abstract class GetPickingItemConfig 
{

	/**
	 * Returns picking order item ID
	 */
	abstract public function getPickingOrderItemId(
	):int;

	/**
	 * Returns process user ID
	 */
	abstract public function getProcessUserId(
	):int;

	/**
	 * Add a plugin configuration
	 */
	abstract public function addPluginConfig(
		string $identifier, 
		 $pluginConfig
	):self;

	/**
	 * Return all plugin configurations
	 */
	abstract public function getPluginConfigs(
	):array;

}