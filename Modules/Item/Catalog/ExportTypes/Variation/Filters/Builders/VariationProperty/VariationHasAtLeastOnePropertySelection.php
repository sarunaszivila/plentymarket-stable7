<?php
namespace Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationProperty;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationCatalogExportFilterBuilder;
use Plenty\Modules\Item\Search\Filter\VariationPropertyFilter;

/**
 * Used to represent the VariationHasPropertySelection filter in both the catalog export and UI.
 */
abstract class VariationHasAtLeastOnePropertySelection implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

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
	):VariationPropertyFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function getKey(
	):string;

	abstract public function setPropertySelectionIds(
		int $propertySelectionIds
	):self;

	abstract public function addPropertySelectionId(
		int $propertySelectionId
	):self;

	/**
	 * Links a key in the settings as source of the value for $propertySelectionIds.
	 */
	abstract public function setPropertySelectionIdsRef(
		string $propertySelectionIdsRef
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