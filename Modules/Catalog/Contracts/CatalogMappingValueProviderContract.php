<?php
namespace Plenty\Modules\Catalog\Contracts;

use Plenty\Modules\Catalog\Containers\CatalogMappingValueContainer;
use Plenty\Modules\Catalog\Models\CatalogMappingValue;

/**
 * The CatalogMappingValueProvider provides all mapping values for a specific field.
 */
interface CatalogMappingValueProviderContract 
{

	/**
	 * Get a CatalogMappingValue specified by its id
	 */
	public function getValueById(
		string $id
	):CatalogMappingValue;

	/**
	 * Get a CatalogMappingValueContainer that contains all CatalogMappingValues that match the given parentId. If no
parentId is provided, all CatalogMappingValues that have no parent value are returned.
	 */
	public function getValuesByParentId(
		string $parentId = null
	):CatalogMappingValueContainer;

	/**
	 * Get a CatalogMappingValueContainer dependent on provided params.
	 */
	public function getValues(
		array $params = []
	):CatalogMappingValueContainer;

}