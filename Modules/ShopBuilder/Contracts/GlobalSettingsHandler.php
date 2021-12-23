<?php
namespace Plenty\Modules\ShopBuilder\Contracts;


/**
 * Contract for classes handling global settings for the ShopBuilder. Handler classes can be registered in the shopBuilder.json of a plugin.
 */
interface GlobalSettingsHandler 
{

	/**
	 * Read values of global settings.
	 */
	public function readSettings(
	);

	/**
	 * Store values of global settings.
	 */
	public function writeSettings(
		 $values
	);

}