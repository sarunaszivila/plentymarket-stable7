<?php
namespace Plenty\Modules\Catalog\Containers\Filters;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;

/**
 * The CatalogUiFilterContainer collects the ui representation of multiple filters.
 */
abstract class CatalogUiFilterContainer 
{

	abstract public function addFilter(
		CatalogUiFilter $filter
	);

	abstract public function getFilters(
	):array;

}