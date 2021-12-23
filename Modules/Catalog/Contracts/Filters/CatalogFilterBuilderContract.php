<?php
namespace Plenty\Modules\Catalog\Contracts\Filters;

use Plenty\Modules\Catalog\Containers\Filters\CatalogFilterBuilderContainer;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;

/**
 * The CatalogFilterBuilderContract is the interface for catalog filter builder. They are used to collect data for filters and then retrieve the specific export or ui filter.
 */
interface CatalogFilterBuilderContract 
{

	/**
	 * Returns an identifier for the filter
	 */
	public function getKey(
	):string;

	/**
	 * This method will be filled by the specified values in a catalog. It should be used to provide
the necessary manipulation so the filter that is returned by getFilter can be consumed by the export.
	 */
	public function setFilterData(
		 $filterData
	);

	/**
	 * Returns the filter that will be given to the export
	 */
	public function getFilter(
		array $settings = []
	);

	/**
	 * Returns the UI representation of the filter
	 */
	public function getUiFilter(
	):CatalogUiFilter;

}