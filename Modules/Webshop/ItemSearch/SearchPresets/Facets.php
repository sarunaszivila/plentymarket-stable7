<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;

use Plenty\Modules\Webshop\ItemSearch\Factories\FacetSearchFactory;

/**
 * Query facets for the item search of the webstore.
 */
abstract class Facets 
{

	/**
	 * Get preset search factory.
	 */
	abstract public static function getSearchFactory(
		array $options
	):FacetSearchFactory;

}