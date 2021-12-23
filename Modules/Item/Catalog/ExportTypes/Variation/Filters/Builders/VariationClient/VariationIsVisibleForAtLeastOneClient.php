<?php
namespace Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationClient;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Item\Catalog\ExportTypes\Variation\Filters\Builders\VariationCatalogExportFilterBuilder;
use Plenty\Modules\Item\Search\Filter\ClientFilter;

/**
 * Used to represent the VariationIsVisibleForAtLeastOneClient filter in both the catalog export and UI.
 */
abstract class VariationIsVisibleForAtLeastOneClient implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	/**
	 * This method will be called in the export process if the filter was registered as a custom filter. In the
template definition this should not be called. Use the specific setter methods instead.
	 */
	abstract public function setFilterData(
		 $filterData
	);

	/**
	 * Will return a ClientFilter if at least one client id is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):ClientFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function getKey(
	):string;

	abstract public function setClients(
		int $clients
	):self;

	abstract public function addClient(
		int $client
	):self;

	abstract public function setClientsRef(
		string $clientsRef
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