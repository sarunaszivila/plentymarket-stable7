<?php
namespace Plenty\Modules\Order\Legacy\Services\Tax;


/**
 * This model holds all information about the data used to detect the order taxes.
 */
interface TaxInformation 
{

	/**
	 * Get the location ID.
	 */
	public function getLocationId(
	):int;

	/**
	 * Get the billing country ID.
	 */
	public function getBillingCountryId(
	):int;

	/**
	 * Get the delivery country ID.
	 */
	public function getDeliveryCountryId(
	):int;

	/**
	 * Get the tax id number of the billing address.
	 */
	public function getBillingTaxIdNumber(
	):string;

	/**
	 * Get the tax id number of the delivery address.
	 */
	public function getDeliveryTaxIdNumber(
	):string;

	/**
	 * Get the date.
	 */
	public function getDate(
	):string;

	/**
	 * Get whether the delivery address ha sn entry cerificat or not.
	 */
	public function getHasEntryCertificate(
	):bool;

}