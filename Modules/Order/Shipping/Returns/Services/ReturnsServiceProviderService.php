<?php
namespace Plenty\Modules\Order\Shipping\Returns\Services;

use Plenty\Modules\Order\Shipping\Returns\Exceptions\ReturnsProviderRegisterException;
use Plenty\Modules\Order\Shipping\Returns\Models\ReturnsServiceProvider;
use Plenty\Modules\Order\Shipping\Returns\Services\Entries\ReturnsServiceProviderEntry;

/**
 * The ReturnsServiceProviderService class offers the possibility to register a returns service provider class and method that can be called by plentymarkets returns controllers.
 */
abstract class ReturnsServiceProviderService 
{

	/**
	 * Register returns service provider
	 */
	abstract public function registerReturnsProvider(
		string $returnsServiceProviderCode, 
		string $returnsServiceProviderLabel, 
		string $returnsServiceProviderClass, 
		bool $useParentOrderId = true
	):bool;

	/**
	 * Get returns service provider by id
	 */
	abstract public function getReturnsServiceProviderEntryById(
		int $providerId
	):ReturnsServiceProviderEntry;

	/**
	 * Returns boolean whether the returns service provider has or has not the given method
	 */
	abstract public function hasReturnsServiceProviderMethod(
		string $returnsServiceProviderCode, 
		string $methodName
	):bool;

}