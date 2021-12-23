<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;

use Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Helpers\ResultFieldTemplate;

/**
 * Query live shopping items.
 */
abstract class LiveShoppingItems 
{

	/**
	 * Get preset search factory.
	 */
	abstract public static function getSearchFactory(
		array $options
	):VariationSearchFactory;

}