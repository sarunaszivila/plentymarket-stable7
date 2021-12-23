<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;


/**
 * Define a preset of search request parameters to be reused for common search requests.
 *
 */
interface SearchPreset 
{

	/**
	 * Get the search factory from the preset.
	 */
	public static function getSearchFactory(
		array $options
	);

}