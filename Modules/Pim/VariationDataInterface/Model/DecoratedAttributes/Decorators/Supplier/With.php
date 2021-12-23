<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Supplier;

use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * contains lazy loaded supplier data
 */
abstract class With 
{
	
	/**
	 * @var Contact
	 */
	public		$supplier;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}