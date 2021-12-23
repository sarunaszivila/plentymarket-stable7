<?php
namespace Plenty\Modules\Webshop\Contracts;


/**
 * Get information about shipping and parcel presets.
 */
interface ShippingRepositoryContract 
{

	/**
	 * Check if there is any parcel service preset that allows sending to post offices.
	 */
	public function hasAnyPostOfficePreset(
	):bool;

	/**
	 * Check if there is any parcel service preset that allows sending to parcel boxes.
	 */
	public function hasAnyParcelBoxPreset(
	):bool;

}