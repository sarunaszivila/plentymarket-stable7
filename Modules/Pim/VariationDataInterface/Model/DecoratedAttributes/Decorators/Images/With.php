<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Images;

use Plenty\Modules\Item\ItemImage\Models\ItemImage;

/**
 * contains lazy loaded image data
 */
abstract class With 
{
	
	/**
	 * @var ItemImage
	 */
	public		$image;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}