<?php
namespace Plenty\Modules\ShopBuilder\Contracts;


/**
 * Contract for content presets. Presets can provide a predefined set of widgets when creating new contents in the shopBuilder.
 */
interface ContentPreset 
{

	/**
	 * Get the widget configurations of the presets to be assigned to the created content.
	 */
	public function getWidgets(
	);

}