<?php
namespace Plenty\Modules\Item\ItemCrossSelling\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\ItemCrossSelling\Models\DynamicItemCrossSelling;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * Repository for dynamic item cross-selling
 */
interface DynamicItemCrossSellingRepositoryContract 
{

	/**
	 * Create a new dynamic cross-selling link
	 */
	public function create(
		array $data
	):DynamicItemCrossSelling;

	/**
	 * Get one dynamic cross-selling link of an item by item ID and cross-selling item ID
	 */
	public function show(
		int $itemId, 
		int $crossItemId
	):DynamicItemCrossSelling;

	/**
	 * Delete a dynamic cross-selling link. The ID of the item and the ID of the cross-selling item must be specified. An exception is thrown if at least one relation exists.
	 */
	public function delete(
		int $itemId, 
		int $crossItemId
	):DeleteResponse;

	/**
	 * List dynamic cross-selling links by item ID
	 */
	public function findByItemId(
		int $itemId
	):array;

	/**
	 * List all dynamic cross-selling links where the given item ID occurs
	 */
	public function findAllByItemId(
		int $itemId
	):array;

}