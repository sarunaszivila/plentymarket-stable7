<?php
namespace Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\Item;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationCatalogExportFilterBuilder;
use Plenty\Modules\Item\Search\Filter\ItemFilter;

/**
 * Used to represent the ItemHasIds filter in both the catalog export and UI.
 */
abstract class ItemHasIds implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	/**
	 * This method will be called in the export process if the filter was registered as a custom filter. In the
template definition this should not be called. Use the specific setter methods instead.
	 */
	abstract public function setFilterData(
		 $filterData
	);

	/**
	 * Will return a ItemFilter if at least one item id is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):ItemFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setItemIds(
		int $itemIds
	):self;

	abstract public function addItemId(
		int $itemId
	):self;

	abstract public function getKey(
	):string;

	abstract public function setItemIdsRef(
		string $itemIdsRef
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