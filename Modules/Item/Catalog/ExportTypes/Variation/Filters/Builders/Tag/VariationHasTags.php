<?php
namespace Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\Tag;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationCatalogExportFilterBuilder;
use Plenty\Modules\Item\Search\Filter\TagFilter;

/**
 * Used to represent the HasAllTags filter in both the catalog export and UI.
 */
abstract class VariationHasTags implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	/**
	 * This method will be called in the export process if the filter was registered as a custom filter. In the
template definition this should not be called. Use the specific setter methods instead.
	 */
	abstract public function setFilterData(
		 $filterData
	);

	/**
	 * Will return a TagFilter if at least one tag id is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):TagFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setTagIds(
		int $tagIds
	):self;

	abstract public function addTagId(
		int $tagId
	):self;

	abstract public function getKey(
	):string;

	abstract public function setTagIdsRef(
		string $tagIdsRef
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