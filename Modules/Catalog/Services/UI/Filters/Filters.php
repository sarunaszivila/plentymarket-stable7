<?php
namespace Plenty\Modules\Catalog\Services\UI\Filters;

use Illuminate\Support\Arr;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionContract;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionsContract;
use Plenty\Modules\Catalog\Services\UI\Filters\Elements\DateFilter;
use Plenty\Modules\Catalog\Services\UI\Filters\Elements\NumberFilter;
use Plenty\Modules\Catalog\Services\UI\Filters\Elements\OperatorFilter;
use Plenty\Modules\Catalog\Services\UI\Filters\Elements\SelectFilter;
use Plenty\Modules\Catalog\Services\UI\Filters\Elements\TextFilter;
use Plenty\Modules\Catalog\Services\UI\Options\UIOptions;
use Plenty\Modules\ElasticSync\Models\Filter\Filter;
use Version\Operator;

/**
 * Filters container
 */
abstract class Filters 
{

	abstract public function addLegacyFilterBuilder(
		CatalogFilterBuilderContract $filterBuilder, 
		array $data = []
	);

	abstract public function buildFiltersFromLegacyFilterBuilders(
		array $settings = []
	):Filters;

	abstract public function getFilter(
		string $key
	);

	abstract public function getDateFilters(
	):array;

	abstract public function getOperatorFilters(
	):array;

	abstract public function getDateFilter(
		string $key
	):DateFilter;

	/**
	 * Add an option
	 */
	abstract public function add(
		UIOptionContract $option, 
		string $key = null
	):UIOptionsContract;

	/**
	 * Get the instance as an array.
	 */
	abstract public function toArray(
	):array;

}