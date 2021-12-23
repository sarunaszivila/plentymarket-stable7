<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model;

use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Base;
use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Inheritance;
use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Timestamp;
use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Unit;

/**
 * The variation model, contains all possible informations of a variation
 */
abstract class Variation 
{
	
	/**
	 * @var int
	 */
	public		$id;
	
	/**
	 * @var array
	 */
	public		$additionalSkus;
	
	/**
	 * @var array
	 */
	public		$attributeValues;
	
	/**
	 * @var Base
	 */
	public		$base;
	
	/**
	 * @var array
	 */
	public		$barcodes;
	
	/**
	 * @var array
	 */
	public		$bundleComponents;
	
	/**
	 * @var array
	 */
	public		$categories;
	
	/**
	 * @var array
	 */
	public		$clients;
	
	/**
	 * @var array
	 */
	public		$defaultCategories;
	
	/**
	 * @var array
	 */
	public		$images;
	
	/**
	 * @var array
	 */
	public		$markets;
	
	/**
	 * @var array
	 */
	public		$marketIdentNumbers;
	
	/**
	 * @var array
	 */
	public		$salesPrices;
	
	/**
	 * @var array
	 */
	public		$skus;
	
	/**
	 * @var array
	 */
	public		$supplier;
	
	/**
	 * @var Timestamp
	 */
	public		$timestamps;
	
	/**
	 * @var array
	 */
	public		$warehouses;
	
	/**
	 * @var Unit
	 */
	public		$unit;
	
	/**
	 * @var array
	 */
	public		$tags;
	
	/**
	 * @var array
	 */
	public		$comments;
	
	/**
	 * @var array
	 */
	public		$properties;
	
	/**
	 * @var Inheritance
	 */
	public		$inheritance;
	
	/**
	 * @var array
	 */
	public		$elasticSearchSource;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}