<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;


/**
 * contains informations about a comment, belongs to a variation
 */
abstract class Comment 
{
	
	/**
	 * @var int
	 */
	public		$id;
	
	/**
	 * @var int
	 */
	public		$userId;
	
	/**
	 * @var string
	 */
	public		$text;
	
	/**
	 * @var bool
	 */
	public		$isVisibleForContact;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}