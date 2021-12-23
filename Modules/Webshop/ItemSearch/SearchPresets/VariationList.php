<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;

use Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Helpers\ResultFieldTemplate;
use Plenty\Modules\Webshop\ItemSearch\Helpers\SortingHelper;

/**
 * Search for variation lists
 */
abstract class VariationList 
{

	/**
	 * Get preset search factory.
	 */
	abstract public static function getSearchFactory(
		array $options
	):VariationSearchFactory;

}