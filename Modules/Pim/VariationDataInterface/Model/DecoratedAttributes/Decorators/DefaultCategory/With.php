<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\DefaultCategory;

use Plenty\Modules\Category\Models\Category;

/**
 * contains lazy loaded default category data
 */
abstract class With 
{
	
	/**
	 * @var Category
	 */
	public		$defaultCategory;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}