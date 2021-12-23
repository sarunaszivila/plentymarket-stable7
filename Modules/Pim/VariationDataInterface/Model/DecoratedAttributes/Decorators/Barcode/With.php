<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Barcode;

use Plenty\Modules\Item\Barcode\Models\Barcode;

/**
 * contains lazy loaded barcode data
 */
abstract class With 
{
	
	/**
	 * @var Barcode
	 */
	public		$barcode;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}