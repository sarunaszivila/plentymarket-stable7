<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Variation;

use Carbon\Carbon;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Pim\Catalog\Variation\Filters\DateFilterBuilder;
use Plenty\Modules\Pim\SearchService\Filter\VariationLastUpdatedAtFilter;

/**
 * Used to represent the VariationUpdatedAtFilter in both the catalog export and UI.
 */
abstract class VariationUpdatedAt implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'variationUpdatedAt';

	const OPERATOR = 'operator';

	const FIRST_DATE = 'firstDate';

	const SECOND_DATE = 'secondDate';

	const LAST_DAYS = 'lastDays';

	const OPERATORS = ['today','lastDays','period','=','>','<','>=','<=','!='];

	abstract public function getKey(
	):string;

	/**
	 * Will return a TypeInterface filter if at least one flat file is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):VariationLastUpdatedAtFilter;

	abstract public function setFilterData(
		 $filterData
	);

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setTimeWindow(
		Carbon $fromDate, 
		Carbon $toDate = null
	);

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