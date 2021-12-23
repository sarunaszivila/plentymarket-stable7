<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Property;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\SearchService\Filter\PropertyFilter;

/**
 * Used to represent the VariationHasEachPropertySelection filter in both the catalog export and UI.
 */
abstract class VariationHasPropertySelections implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'variationHasPropertySelections';

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
	 * Will return a VariationPropertyFilter if at least property selection id is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):PropertyFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setPropertySelectionIds(
		int $propertySelectionIds
	):self;

	abstract public function addPropertySelectionId(
		int $propertySelectionId
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