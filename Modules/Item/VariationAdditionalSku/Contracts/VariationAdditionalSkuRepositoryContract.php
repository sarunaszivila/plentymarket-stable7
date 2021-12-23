<?php
namespace Plenty\Modules\Item\VariationAdditionalSku\Contracts;

use Plenty\Modules\Item\VariationAdditionalSku\Models\VariationAdditionalSku;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation additional sku repository
 */
interface VariationAdditionalSkuRepositoryContract 
{

	/**
	 * Lists additional SKUs
	 */
	public function search(
		array $filter
	):array;

	/**
	 * Gets an additional SKU
	 */
	public function get(
		int $id
	):VariationAdditionalSku;

	/**
	 * Creates an additional SKU
	 */
	public function create(
		array $data
	):VariationAdditionalSku;

	/**
	 * Updates an additional SKU
	 */
	public function update(
		int $id, 
		array $data
	):VariationAdditionalSku;

	/**
	 * Deletes an additional SKU
	 */
	public function delete(
		int $id
	):DeleteResponse;

}