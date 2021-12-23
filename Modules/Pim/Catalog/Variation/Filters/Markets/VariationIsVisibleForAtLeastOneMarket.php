<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Markets;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\Catalog\Variation\Filters\SelectionValueContainers\ReferrerContainer;
use Plenty\Modules\Pim\SearchService\Filter\MarketFilter;

/**
 * Used to represent the VariationIsVisibleForAtLeastOneMarket filter in both the catalog export and UI.
 */
abstract class VariationIsVisibleForAtLeastOneMarket implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'variationIsVisibleForAtLeastOneMarket';

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
	 * Will return a MarketFilter if at least one market id is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):MarketFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setMarketIds(
		float $marketIds
	):self;

	abstract public function addMarketId(
		float $marketId
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