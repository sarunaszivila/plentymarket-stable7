<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;


/**
 * contains informations about a client, belongs to a variation
 */
abstract class Client 
{
	
	/**
	 * @var int
	 */
	public		$plentyId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}