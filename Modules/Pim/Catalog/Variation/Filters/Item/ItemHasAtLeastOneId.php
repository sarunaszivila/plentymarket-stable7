<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Item;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\SearchService\Filter\ItemFilter;

/**
 * Used to represent the ItemHasIds filter in both the catalog export and UI.
 */
abstract class ItemHasAtLeastOneId implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'itemHasAtLeastOneId';

	abstract public function getKey(
	):string;

	/**
	 * This method will be called in the export process if the filter was registered as a custom filter. In the
template definition this should not be called. Use the specific setter methods instead.
	 */
	abstract public function setFilterData(
		 $filterData
	);

	abstract public function getFilter(
		array $settings = []
	);

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setItemIds(
		int $itemIds
	):self;

	abstract public function addItemId(
		int $itemId
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