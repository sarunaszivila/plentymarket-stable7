<?php
namespace Plenty\Modules\Item\Variation\Contracts;

use Plenty\Modules\Item\Variation\Services\ExportPreloadValue\ExportPreloadValue;

/**
 * Enhances the loading speed.
 */
interface VariationExportServiceContract 
{

	const ITEM = 'Item';

	const SUPPLIER = 'VariationSupplier';

	const STOCK = 'VariationStock';

	const WAREHOUSE = 'VariationWarehouse';

	const BARCODE = 'VariationBarcode';

	const STOCK_STORAGE_LOCATION = 'StockStorageLocation';

	const TAG = 'VariationTag';

	const MARKET_IDENT_NUMBER = 'VariationMarketIdentNumber';

	const COMMENT = 'VariationComment';

	const SALES_PRICE = 'VariationSalesPrice';

	const CATEGORY = 'VariationCategory';

	const PROPERTY = 'VariationEigenschaften';

	const ADDITIONAL_SKU = 'VariationAdditionalSku';

	const CROSS_SELLING = 'ItemCrossSelling';

	const SHIPPING_PROFILE = 'ItemShippingProfile';

	const DEFAULT_CATEGORY = 'VariationDefaultCategory';

	const SERIAL_NUMBER = 'ItemSerialNumber';

	public function addPreloadTypes(
		array $types
	);

	public function preload(
		array $values, 
		array $parameters = []
	):array;

	public function getData(
		string $dataType, 
		int $variationId
	);

	public function getAll(
		int $variationId
	);

	/**
	 * Resets the pre loaded data
	 */
	public function resetPreLoadedData(
	);

	/**
	 * Resets the current pre load types
	 */
	public function resetPreloadTypes(
	);

}