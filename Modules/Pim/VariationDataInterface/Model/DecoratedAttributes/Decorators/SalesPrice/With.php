<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\SalesPrice;

use Plenty\Modules\Item\SalesPrice\Models\SalesPrice;

/**
 * contains lazy loaded sales price data
 */
abstract class With 
{
	
	/**
	 * @var SalesPrice
	 */
	public		$salesPrice;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}