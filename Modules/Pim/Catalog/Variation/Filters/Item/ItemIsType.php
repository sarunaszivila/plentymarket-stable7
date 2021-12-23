<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Item;

use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterSelectionValueContainer;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilterSelectionValue;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\SearchService\Filter\ItemFilter;

/**
 * Used to represent the isItemType filter in both the catalog export and UI.
 */
abstract class ItemIsType implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const DEFAULT = 'default';

	const SET = 'set';

	const MULTI_PACK = 'multiPack';

	const ITEM_TYPES = ['default','set','multiPack'];

	const KEY = 'itemIsType';

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
	 * Will return a ItemFilter if a item type is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):ItemFilter;

	abstract public function setItemType(
		string $itemType
	):self;

	abstract public function getUiFilter(
	):CatalogUiFilter;

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