<?php
namespace Plenty\Modules\Catalog\Containers\Filters;

use Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract;

/**
 * The CatalogFilterBuilderContainer collects filter builders.
 */
abstract class CatalogFilterBuilderContainer 
{

	abstract public function addFilterBuilder(
		CatalogFilterBuilderContract $filterBuilder
	);

	abstract public function getFilterBuilders(
	):array;

}