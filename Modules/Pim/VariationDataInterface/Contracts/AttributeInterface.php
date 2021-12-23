<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Contracts;

use Exception;
use Plenty\Modules\Core\Data\Exceptions\LazyLoaderException;
use Plenty\Modules\Core\Data\Exceptions\ModelFlattenerException;
use Plenty\Modules\Pim\VariationDataInterface\Model\Variation;
use Plenty\Modules\Pim\VariationDataInterface\Model\VariationDataInterfaceContext;

/**
 * The interface of all variation attributes
 */
interface AttributeInterface 
{

	/**
	 * Get the name of the attribute
	 */
	public function getName(
	):string;

	/**
	 * Get the related key on the variation model.
	 */
	public static function getVariationAttribute(
	):string;

	/**
	 * Get all parts which should be lazy loaded.
	 */
	public function addLazyLoadParts(
		array $lazyLoadParts
	):self;

	/**
	 * Get all parts which should be lazy loaded.
	 */
	public function getLazyLoadParts(
	):array;

}