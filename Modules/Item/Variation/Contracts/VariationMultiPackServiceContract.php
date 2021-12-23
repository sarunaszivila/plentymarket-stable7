<?php
namespace Plenty\Modules\Item\Variation\Contracts;


/**
 * The contract for the variation bundle service
 */
interface VariationMultiPackServiceContract 
{

	public function createMultiPackBundle(
		int $variationId, 
		int $componentId, 
		int $quantity
	);

	public function setMainVariationBundleItem(
		int $variationId
	);

	public function updateMultiPackBundle(
		int $variationId, 
		int $quantityId, 
		int $quantity
	);

	public function getAttributeValueSetId(
		int $itemId
	):int;

	public function matchUnit(
		int $itemId
	):int;

	public function isMultiPack(
		int $itemId
	):bool;

}