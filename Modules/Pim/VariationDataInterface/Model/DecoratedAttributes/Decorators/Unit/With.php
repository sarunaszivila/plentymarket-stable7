<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Unit;

use Plenty\Modules\Item\Unit\Models\Unit;

/**
 * contains lazy loaded unit data
 */
abstract class With 
{
	
	/**
	 * @var Unit
	 */
	public		$unit;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}