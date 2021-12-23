<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;

use Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Helpers\ResultFieldTemplate;

/**
 * Append list of all variations for attribute selection in item views
 */
abstract class VariationAttributeMap 
{

	/**
	 * Get preset search factory.
	 */
	abstract public static function getSearchFactory(
		array $options
	):VariationSearchFactory;

}