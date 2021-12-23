<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Category;

use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterSelectionValueContainer;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilterSelectionValue;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\SearchService\Filter\CategoryFilter;

/**
 * Used to represent the IsInACategory filter in both the catalog export and UI.
 */
abstract class VariationIsInACategory implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'variationIsInACategory';

	abstract public function getKey(
	):string;

	abstract public function setFilterData(
		 $filterData
	);

	/**
	 * Will return a CategoryFilter if a category id is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):CategoryFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setShouldBeInACategory(
		bool $shouldBeInACategory
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