<?php
namespace Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationBase;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationCatalogExportFilterBuilder;
use Plenty\Modules\Item\Search\Filter\VariationBaseFilter;

/**
 * Used to represent the VariationHasAtLeastOneAvailability filter in both the catalog export and UI.
 */
abstract class VariationHasAtLeastOneAvailability implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	/**
	 * This method will be called in the export process if the filter was registered as a custom filter. In the
template definition this should not be called. Use the specific setter methods instead.
	 */
	abstract public function setFilterData(
		 $filterData
	);

	/**
	 * Will return a VariationBaseFilter if at least one availability is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):VariationBaseFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function getKey(
	):string;

	abstract public function setAvailabilities(
		int $availabilities
	):self;

	abstract public function addAvailability(
		int $availability
	):self;

	abstract public function setAvailabilitiesRef(
		string $availabilitiesRef
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