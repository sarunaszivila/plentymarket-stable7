<?php
namespace Plenty\Modules\Order\Shipping\Returns\Contracts;

use Plenty\Modules\Order\Shipping\Returns\Models\ReturnsServiceProvider;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ReturnsServiceProviderRepositoryContract is the interface for the returns service provider repository. This interface allows to list returns service providers.
 */
interface ReturnsServiceProviderRepositoryContract 
{

	/**
	 * Get a paginated list of returns services providers
	 */
	public function getReturnsServiceProviderList(
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = [], 
		array $with = []
	):PaginatedResult;

	/**
	 * Find a returns service provider by ID
	 */
	public function findById(
		int $returnsServiceProviderId
	):ReturnsServiceProvider;

	/**
	 * Find a returns service provider by name
	 */
	public function findByName(
		string $returnsServiceProviderName
	):array;

	/**
	 * Save a returns service provider
	 */
	public function saveReturnsServiceProvider(
		string $pluginName, 
		string $returnProviderAlias = null
	):ReturnsServiceProvider;

	/**
	 * Get the returns service provider for an order
	 */
	public function getReturnsServiceProvider(
		int $orderId
	):ReturnsServiceProvider;

	public function pluginList(
	);

}