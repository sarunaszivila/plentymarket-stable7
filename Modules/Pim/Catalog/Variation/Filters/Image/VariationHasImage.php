<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Image;

use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterSelectionValueContainer;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilterSelectionValue;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\SearchService\Filter\VariationBaseFilter;

/**
 * Used to represent the HasAnImage filter in both the catalog export and UI.
 */
abstract class VariationHasImage implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'variationHasImage';

	abstract public function getKey(
	):string;

	abstract public function setFilterData(
		 $filterData
	);

	/**
	 * Will return a VariationBaseFilter if shouldHaveImage is set. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):VariationBaseFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setShouldHaveImage(
		bool $shouldHaveImage
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