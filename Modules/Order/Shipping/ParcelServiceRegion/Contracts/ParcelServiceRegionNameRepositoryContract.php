<?php
namespace Plenty\Modules\Order\Shipping\ParcelServiceRegion\Contracts;

use Plenty\Modules\Order\Shipping\ParcelServiceRegion\Models\ParcelServiceRegionName;

/**
 * Get parcel service region name
 */
interface ParcelServiceRegionNameRepositoryContract 
{

	/**
	 * Creates a Region
	 */
	public function create(
		array $data
	):ParcelServiceRegionName;

	/**
	 * Return all the regions
	 */
	public function getAllRegions(
	):array;

}