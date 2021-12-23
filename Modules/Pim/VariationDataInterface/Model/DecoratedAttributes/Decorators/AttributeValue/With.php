<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\AttributeValue;

use Plenty\Modules\Item\Attribute\Models\Attribute;
use Plenty\Modules\Item\Attribute\Models\AttributeValue;

/**
 * contains lazy loaded attribute data
 */
abstract class With 
{
	
	/**
	 * @var Attribute
	 */
	public		$attribute;
	
	/**
	 * @var AttributeValueModel
	 */
	public		$attributeValue;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}