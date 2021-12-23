<?php
namespace Plenty\Modules\Order\Shipping\Returns\Services\Entries;

use Illuminate\Translation\Translator;

/**
 * The returns provider entry contains all information needed to use module returns in plentymarkets returns .
 */
abstract class ReturnsServiceProviderEntry 
{

	/**
	 * Get the returns service provider label
	 */
	abstract public function getReturnsServiceProviderLabel(
	):string;

	/**
	 * Set the returns service provider label
	 */
	abstract public function setReturnsServiceProviderLabel(
		string $returnsServiceProviderLabel
	):ReturnsServiceProviderEntry;

	/**
	 * Get the return service provider code
	 */
	abstract public function getReturnsServiceProviderCode(
	):string;

	/**
	 * Set the returns service provider code
	 */
	abstract public function setReturnsServiceProviderCode(
		string $returnsServiceProviderCode
	):ReturnsServiceProviderEntry;

	/**
	 * Get the returns service provider class
	 */
	abstract public function getReturnsServiceProviderClass(
		string $methodName
	):string;

	/**
	 * Check if method exists in returnsServiceProviderClass
	 */
	abstract public function methodExists(
		string $methodName
	):bool;

	/**
	 * Get the provider ID
	 */
	abstract public function getProviderId(
	):int;

	/**
	 * Get setting for using parent order ID
	 */
	abstract public function getUseParentOrderId(
	):bool;

}