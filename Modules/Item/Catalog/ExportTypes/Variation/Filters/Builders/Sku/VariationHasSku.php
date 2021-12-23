<?php
namespace Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\Sku;

use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterContainer;
use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterSelectionValueContainer;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilterSelectionValue;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationCatalogExportFilterBuilder;
use Plenty\Modules\Item\Search\Filter\SkuFilter;

/**
 * Used to represent the VariationHasSku filter in both the catalog export and UI.
 */
abstract class VariationHasSku implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const MARKET_ID_STRING = 'marketId';

	const ACCOUNT_ID_STRING = 'accountId';

	const STATUS_STRING = 'status';

	/**
	 * This method will be called in the export process if the filter was registered as a custom filter. In the
template definition this should not be called. Use the specific setter methods instead.
	 */
	abstract public function setFilterData(
		 $filterData
	);

	/**
	 * Will return a SkuFilter if at least accountId, marketId or status are provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):SkuFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function getKey(
	):string;

	abstract public function setMarketId(
		float $marketId
	):self;

	abstract public function setAccountId(
		int $accountId
	):self;

	abstract public function setStatus(
		string $status
	):self;

	abstract public function setMarketIdRef(
		string $marketIdRef
	):self;

	abstract public function setAccountIdRef(
		string $accountIdRef
	):self;

	abstract public function setStatusRef(
		string $statusRef
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