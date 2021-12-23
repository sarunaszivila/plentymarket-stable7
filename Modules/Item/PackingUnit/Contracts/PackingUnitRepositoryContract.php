<?php
namespace Plenty\Modules\Item\PackingUnit\Contracts;

use Plenty\Modules\Item\PackingUnit\Models\PackingUnit;

/**
 * Get the packing units for the item variations
 */
interface PackingUnitRepositoryContract 
{

	/**
	 * Get the item variation packing units
	 */
	public function getPackingUnits(
		string $language
	):array;

	/**
	 * Get the item variation packing unit for a specific given id
	 */
	public function getPackingUnitsById(
		int $id, 
		string $language = "all", 
		bool $isUnitId = false
	):PackingUnit;

}