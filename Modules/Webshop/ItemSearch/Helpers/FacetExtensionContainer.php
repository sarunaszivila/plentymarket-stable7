<?php
namespace Plenty\Modules\Webshop\ItemSearch\Helpers;

use Plenty\Modules\Webshop\ItemSearch\Contracts\FacetExtension;
use Plenty\Plugin\Events\Dispatcher;

/**
 * Container to collect facet extensions
 */
abstract class FacetExtensionContainer 
{

	/**
	 * Get all registered facet extensions.
	 */
	abstract public function getFacetExtensions(
	):array;

	/**
	 * Add an extension to provide a custom facet.
	 */
	abstract public function addFacetExtension(
		FacetExtension $facetExtension
	);

}