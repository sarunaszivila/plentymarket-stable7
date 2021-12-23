<?php
namespace Plenty\Modules\Order\Shipping\ServiceProvider\Services\Entries;

use Illuminate\Translation\Translator;

/**
 * The shipping provider entry contains all information needed to use module shipping in plentymarkets shipping .
 */
abstract class ShippingServiceProviderEntry 
{

	/**
	 * Get the shipping service provider classes
	 */
	abstract public function getShippingServiceProviderClasses(
	):array;

	/**
	 * Get the shipping service provider names
	 */
	abstract public function getShippingServiceProviderNames(
	);

	/**
	 * Set the shipping service provider names
	 */
	abstract public function setShippingServiceProviderNames(
		array $shippingServiceProviderNames
	):ShippingServiceProviderEntry;

	/**
	 * Get the shipping service provider code
	 */
	abstract public function getShippingServiceProviderCode(
	):string;

	/**
	 * Set the shipping service provider entry
	 */
	abstract public function setShippingServiceProviderCode(
		string $shippingServiceProviderCode
	):ShippingServiceProviderEntry;

	/**
	 * Get the shipping service provider class
	 */
	abstract public function getShippingServiceProviderClass(
		string $methodName
	):string;

	/**
	 * Check if method exists in shipping service provider classes
	 */
	abstract public function methodExists(
		string $methodName
	):bool;

}