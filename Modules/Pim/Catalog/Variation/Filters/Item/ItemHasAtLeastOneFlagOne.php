<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Item;

use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterSelectionValueContainer;
use Plenty\Modules\Catalog\Helpers\Legacy\FlagHelper;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilterSelectionValue;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\SearchService\Filter\ItemFilter;

/**
 * Used to represent the ItemHasFlagOne filter in both the catalog export and UI.
 */
abstract class ItemHasAtLeastOneFlagOne implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'itemHasAtLeastOneFlagOne';

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
	 * Will return a ItemFilter if a flag is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):ItemFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setFlags(
		array $flags
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