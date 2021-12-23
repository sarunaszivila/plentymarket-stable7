<?php
namespace Plenty\Modules\StockManagement\Stock\Contracts;


/**
 * The ItemVariationWarehouseDynamicRepositoryContract is the interface for the stock repository. This interface allows you to find, create and update stock. Stock is assigned to one variation and is stored in warehouses.
 */
interface ItemVariationWarehouseDynamicRepositoryContract 
{

	public function findAvgOrderByVariationId(
		 $variationId
	);

}