<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;

use Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Helpers\SortingHelper;

/**
 * Query items to display search suggestions
 */
abstract class SearchSuggestions 
{

	/**
	 * Get preset search factory.
	 */
	abstract public static function getSearchFactory(
		array $options
	):VariationSearchFactory;

}