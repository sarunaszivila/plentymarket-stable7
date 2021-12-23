<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Tag;

use Plenty\Modules\Tag\Models\Tag;

/**
 * contains lazy loaded tag data
 */
abstract class With 
{
	
	/**
	 * @var Tag
	 */
	public		$tag;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}