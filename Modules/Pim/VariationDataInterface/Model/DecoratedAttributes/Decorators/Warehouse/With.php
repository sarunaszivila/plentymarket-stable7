<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Warehouse;

use Plenty\Modules\StockManagement\Warehouse\Models\Warehouse;

/**
 * contains lazy loaded warehouse data
 */
abstract class With 
{
	
	/**
	 * @var Warehouse
	 */
	public		$warehouse;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}