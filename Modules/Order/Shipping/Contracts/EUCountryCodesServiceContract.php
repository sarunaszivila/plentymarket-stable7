<?php
namespace Plenty\Modules\Order\Shipping\Contracts;


/**
 * The EUCountryCodesServiceContract model
 */
interface EUCountryCodesServiceContract 
{

	public function isEUCountry(
		int $countryId, 
		string $date = null
	):bool;

	public function hasCommunityTax(
		int $countryId, 
		string $date = null
	):bool;

	public function getTaxTerritory(
		int $countryId, 
		string $date = null
	):int;

	public function hasCommunityToll(
		int $countryId, 
		string $date = null
	):bool;

	public function getTollTerritory(
		int $countryId, 
		string $date = null
	):int;

	public function isExportDelivery(
		int $countryId, 
		int $merchandCountryId = null, 
		string $date = null
	):bool;

}