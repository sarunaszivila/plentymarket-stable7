<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Client;

use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterSelectionValueContainer;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilterSelectionValue;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\Catalog\Variation\Filters\SelectionValueContainers\ClientContainer;
use Plenty\Modules\Pim\SearchService\Filter\ClientFilter;

/**
 * Used to represent the isVisibleForAllClients filter in both the catalog export and UI.
 */
abstract class VariationHasClients implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'variationHasClients';

	abstract public function getKey(
	):string;

	/**
	 * This method will be called in the export process if the filter was registered as a custom filter. In the
template definition this should not be called. Use the specific setter methods instead.
	 */
	abstract public function setFilterData(
		 $filterData
	);

	/**
	 * Will return a ClientFilter if at least one client id is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):ClientFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setClientIds(
		int $clientIds
	):self;

	abstract public function addClientId(
		int $clientId
	):self;

	/**
	 * Fluent setter
	 */
	abstract public function setRequired(
		bool $required
	):self;

	/**
	 * Fluent setter
	 */
	abstract public function setIsVisible(
		bool $isVisible
	):self;

}