<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Contracts;

use Plenty\Modules\Pim\VariationDataInterface\Model\VariationDataInterfaceContext;
use Plenty\Modules\Pim\VariationDataInterface\Operations\CreateOrUpdateOperation;
use Plenty\Modules\Pim\VariationDataInterface\Operations\DeleteOperation;
use Plenty\Modules\Pim\VariationDataInterface\Operations\ReplaceOperation;

/**
 * Use this interface to load performant article data
 */
interface VariationDataInterfaceContract 
{

	/**
	 * Get the result, using the context.
	 */
	public function getResult(
		VariationDataInterfaceContext $context
	):VariationDataInterfaceResultInterface;

	/**
	 * Get the multiple results, using multiple contexts
	 */
	public function getMultipleResults(
		array $contextList
	):array;

}