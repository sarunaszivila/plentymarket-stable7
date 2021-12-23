<?php
namespace Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders;

use Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;

/**
 * Base class for filters that are used in catalog variation exports.
 */
abstract class VariationCatalogExportFilterBuilder implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

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

	abstract public function getKey(
	):string;

	/**
	 * This method will be filled by the specified values in a catalog. It should be used to provide
the necessary manipulation so the filter that is returned by getFilter can be consumed by the export.
	 */
	abstract public function setFilterData(
		 $filterData
	);

	/**
	 * Returns the filter that will be given to the export
	 */
	abstract public function getFilter(
		array $settings = []
	);

	/**
	 * Returns the UI representation of the filter
	 */
	abstract public function getUiFilter(
	):CatalogUiFilter;

}