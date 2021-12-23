<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Category;

use Plenty\Modules\Category\Models\Category;
use Plenty\Modules\Category\Models\CategoryBranch;

/**
 * contains lazy loaded category data
 */
abstract class With 
{
	
	/**
	 * @var Category
	 */
	public		$category;
	
	/**
	 * @var CategoryBranch
	 */
	public		$categoryBranch;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}