<?php
namespace Plenty\Modules\Accounting\Vat\Contracts;

use Plenty\Modules\Accounting\Exceptions\AccountingException;
use Plenty\Modules\Accounting\Vat\Exceptions\VatException;
use Plenty\Modules\Accounting\Vat\Models\Vat;
use Plenty\Modules\Order\Legacy\Services\Tax\TaxInformation;

/**
 * This interface provides methods to initialise the detection of a VAT configuration and to actually detect VAT rates or VAT fields.
 */
interface VatInitContract 
{

	/**
	 * Initialise the VAT system data
	 */
	public function init(
		int $billingCountryId, 
		string $taxIdNumber, 
		int $locationId, 
		int $shippingCountryId = 0, 
		string $startedAt = null
	);

	/**
	 * Get whether the VAT system is already initialised or not
	 */
	public function isInitialized(
	):bool;

	/**
	 * Get the VAT field for a VAT rate
	 */
	public function getVatField(
		float $vatRate, 
		bool $restrictedToDigitalItems = false
	):int;

	/**
	 * Get the VAT rate of a VAT field
	 */
	public function getVatRate(
		int $vatField, 
		bool $restrictedToDigitalItems = false
	):float;

	/**
	 * Get the revenue account of a VAT field
	 */
	public function getRevenueAccount(
		int $vatField, 
		bool $restrictedToDigitalItems = false
	):string;

	/**
	 * Get the VAT configuration to be used for VAT calculation
	 */
	public function getUsingVat(
		bool $restrictedToDigitalItems = false
	):Vat;

	/**
	 * Get the VAT rates to be used for VAT calculation
	 */
	public function getUsingVatRates(
		bool $restrictedToDigitalItems = false
	):array;

	/**
	 * Get a standard VAT configuration of an accounting location
	 */
	public function getStandardVatByLocationId(
		int $locationId, 
		string $startedAt = null
	):Vat;

	/**
	 * Get the tax ID number used for tax determination.
	 */
	public function getTaxIdNumber(
	):string;

}