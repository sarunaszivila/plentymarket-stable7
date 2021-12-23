<?php
namespace Plenty\Modules\Catalog\Containers\Filters;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilterSelectionValue;

/**
 * The CatalogUiFilterSelectionValueContainer collects available selection values for a filter.
 */
abstract class CatalogUiFilterSelectionValueContainer 
{

	abstract public function addValue(
		CatalogUiFilterSelectionValue $value
	);

	abstract public function getValues(
	):array;

}