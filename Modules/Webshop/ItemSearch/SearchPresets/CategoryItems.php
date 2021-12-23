<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;

use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Helpers\ResultFieldTemplate;
use Plenty\Modules\Webshop\ItemSearch\Helpers\SortingHelper;
use Plenty\Modules\Webshop\WebshopServiceProvider;

/**
 * Query items for a single category
 */
abstract class CategoryItems 
{

	/**
	 * Get preset search factory.
	 */
	abstract public static function getSearchFactory(
		array $options
	):VariationSearchFactory;

}