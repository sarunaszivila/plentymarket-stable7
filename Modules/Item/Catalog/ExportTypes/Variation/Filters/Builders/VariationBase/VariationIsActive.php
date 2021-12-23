<?php
namespace Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationBase;

use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterSelectionValueContainer;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilterSelectionValue;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationCatalogExportFilterBuilder;
use Plenty\Modules\Item\Search\Filter\VariationBaseFilter;

/**
 * Used to represent the VariationIsActive filter in both the catalog export and UI.
 */
abstract class VariationIsActive implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	abstract public function setShouldBeActive(
		bool $shouldBeActive
	):self;

	abstract public function setShouldBeActiveRef(
		string $shouldBeActiveRef
	):self;

	/**
	 * This method will be called in the export process if the filter was registered as a custom filter. In the
template definition this should not be called. Use the specific setter methods instead.
	 */
	abstract public function setFilterData(
		 $filterData
	);

	/**
	 * Will return a VariationBaseFilter if shouldBeActive is defined. Otherwise null will be returned
	 */
	abstract public function getFilter(
		array $settings = []
	):VariationBaseFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function getKey(
	):string;

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